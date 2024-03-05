<?php
/**
 * File name: EProvidersCriteria.php
 * Last modified: 2023.01.02 at 19:15:05
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Criteria\Users;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class EProvidersCriteria.
 *
 * @package namespace App\Criteria\Users;
 */
class EProvidersCriteria implements CriteriaInterface
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
        return $model->whereHas("roles", function($q){ $q->where("name", "provider"); });
    }
}
