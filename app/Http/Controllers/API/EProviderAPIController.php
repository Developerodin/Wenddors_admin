<?php
/*
 * File name: EProviderAPIController.php
 * Last modified: 2022.04.13 at 12:23:04
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2022
 */

namespace App\Http\Controllers\API;


use App\Criteria\EProviders\AcceptedCriteria;
use App\Criteria\EProviders\EProvidersOfUserCriteria;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEProviderRequest;
use App\Http\Requests\UpdateEProviderRequest;
use App\Repositories\EProviderRepository;
use App\Repositories\UploadRepository;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;

/**
 * Class EProviderController
 * @package App\Http\Controllers\API
 */
class EProviderAPIController extends Controller
{
    /** @var  EProviderRepository */
    private $eProviderRepository;

    /**
     * @var UploadRepository
     */
    private $uploadRepository;

    public function __construct(EProviderRepository $eProviderRepo, UploadRepository $uploadRepo)
    {
        $this->eProviderRepository = $eProviderRepo;
        $this->uploadRepository = $uploadRepo;
        parent::__construct();
    }


    /**
     * Display a listing of the EProvider.
     * GET|HEAD /eProviders
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $this->eProviderRepository->pushCriteria(new RequestCriteria($request));
            $this->eProviderRepository->pushCriteria(new AcceptedCriteria());
            $this->eProviderRepository->pushCriteria(new LimitOffsetCriteria($request));
            $eProviders = $this->eProviderRepository->all();
            $this->filterCollection($request, $eProviders);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($eProviders->toArray(), 'E Providers retrieved successfully');
    }

    /**
     * Display the specified EProvider.
     * GET|HEAD /eProviders/{id}
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function show(int $id, Request $request): JsonResponse
    {
        try {
            $this->eProviderRepository->pushCriteria(new RequestCriteria($request));
            $this->eProviderRepository->pushCriteria(new AcceptedCriteria());
            $this->eProviderRepository->pushCriteria(new LimitOffsetCriteria($request));
            $eProvider = $this->eProviderRepository->findWithoutFail($id);
            if (empty($eProvider)) {
                return $this->sendError('EProvider not found');
            }
            $this->filterModel($request, $eProvider);
            $array = $this->orderAvailabilityHours($eProvider);
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }
        return $this->sendResponse($array, 'EProvider retrieved successfully');
    }

    private function orderAvailabilityHours($eProvider)
    {
        $array = $eProvider->toArray();
        if (isset($array['availability_hours'])) {
            $availabilityHours = $array['availability_hours'];
            $availabilityHours = collect($availabilityHours);
            $availabilityHours = $availabilityHours->sortBy(function ($item, $key) {
                return Carbon::createFromIsoFormat('dddd', $item['day'])->dayOfWeek;
            });
            $array['availability_hours'] = array_values($availabilityHours->toArray());
        }
        return $array;
    }

    /**
     * Store a newly created EService in storage.
     *
     * @param CreateEProviderRequest $request
     *
     * @return JsonResponse
     */
    public function store(CreateEProviderRequest $request): JsonResponse
    {
        try {
            $input = $request->all();
            if (auth()->user()->hasAnyRole(['provider', 'customer'])) {
                $input['users'] = [auth()->id()];
                $input['accepted'] = 0;
                $input['featured'] = 0;
                $input['available'] = 1;
            }
            $eProvider = $this->eProviderRepository->create($input);
            if (isset($input['image']) && $input['image'] && is_array($input['image'])) {
                foreach ($input['image'] as $fileUuid) {
                    $cacheUpload = $this->uploadRepository->getByUuid($fileUuid);
                    $mediaItem = $cacheUpload->getMedia('image')->first();
                    $mediaItem->copy($eProvider, 'image');
                }
            }
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }
        return $this->sendResponse($eProvider->toArray(), __('lang.saved_successfully', ['operator' => __('lang.e_provider')]));
    }

    /**
     * Update the specified EService in storage.
     *
     * @param int $id
     * @param UpdateEProviderRequest $request
     *
     * @return JsonResponse
     * @throws RepositoryException
     */
    public function update(int $id, UpdateEProviderRequest $request): JsonResponse
    {
        $this->eProviderRepository->pushCriteria(new EProvidersOfUserCriteria(auth()->id()));
        $eProvider = $this->eProviderRepository->findWithoutFail($id);

        if (empty($eProvider)) {
            return $this->sendError('E Provider not found');
        }
        try {
            $input = $request->all();
            $eProvider = $this->eProviderRepository->update($input, $id);
            if (isset($input['image']) && $input['image'] && is_array($input['image'])) {
                if ($eProvider->hasMedia('image')) {
                    $eProvider->getMedia('image')->each->delete();
                }
                foreach ($input['image'] as $fileUuid) {
                    $cacheUpload = $this->uploadRepository->getByUuid($fileUuid);
                    $mediaItem = $cacheUpload->getMedia('image')->first();
                    $mediaItem->copy($eProvider, 'image');
                }
            }
        } catch (Exception $e) {
            return $this->sendError($e->getMessage());
        }
        return $this->sendResponse($eProvider->toArray(), __('lang.updated_successfully', ['operator' => __('lang.e_provider')]));
    }

    /**
     * Remove the specified EService from storage.
     *
     * @param int $id
     *
     * @return JsonResponse
     * @throws RepositoryException
     */
    public function destroy(int $id): JsonResponse
    {
        $this->eProviderRepository->pushCriteria(new EProvidersOfUserCriteria(auth()->id()));
        $eProvider = $this->eProviderRepository->findWithoutFail($id);
        if (empty($eProvider)) {
            return $this->sendError('E Provider not found');
        }
        $this->eProviderRepository->delete($id);
        return $this->sendResponse($eProvider, __('lang.deleted_successfully', ['operator' => __('lang.e_provider')]));

    }
}
