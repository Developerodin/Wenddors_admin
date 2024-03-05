<?php
/**
 * File name: CustomersCriteria.php
 * Last modified: 2023.01.02 at 19:12:31
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Criteria\Users;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class CustomerCriteria.
 *
 * @package namespace App\Criteria\Users;
 */
class CustomersCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param string              $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->whereHas("roles", function($q){ $q->where("name", "customer"); });
    }
}
