<?php
/*
 * File name: NearCriteria.php
 * Last modified: 2023.04.18 at 11:59:11
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Criteria\Categories;

use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class NearCriteria.
 *
 * @package namespace App\Criteria\Categories;
 */
class NearCriteria implements CriteriaInterface
{
    /**
     * @var array
     */
    private $request;

    /**
     * NearCriteria constructor.
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
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
        if ($this->request->has(['myLon', 'myLat'])) {
            $myLat = $this->request->get('myLat');
            $myLon = $this->request->get('myLon');
            return $model->with(['featuredEServices' => function ($q) use ($myLat, $myLon) {
                return $q->near($myLat, $myLon);
            }]);
        } else {
            return $model;
        }
    }
}
