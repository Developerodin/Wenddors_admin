<?php
/*
 * File name: EProvidersOfUserCriteria.php
 * Last modified: 2022.04.13 at 13:31:34
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2022
 */

namespace App\Criteria\EProviders;

use App\Models\User;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class EProvidersOfUserCriteria.
 *
 * @package namespace App\Criteria\EProviders;
 */
class EProvidersOfUserCriteria implements CriteriaInterface
{

    /**
     * @var User
     */
    private $userId;

    /**
     * EProvidersOfUserCriteria constructor.
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Apply criteria in query repository
     *
     * @param string $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        if (auth()->user()->hasRole('admin')) {
            return $model;
        } elseif (auth()->user()->hasAnyRole(['provider', 'customer'])) {
            return $model->join('e_provider_users', 'e_provider_users.e_provider_id', '=', 'e_providers.id')
                ->select('e_providers.*')
                ->where('e_provider_users.user_id', $this->userId);
        } else {
            return $model;
        }
    }
}
