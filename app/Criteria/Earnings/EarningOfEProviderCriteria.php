<?php
/*
 * File name: EarningOfEProviderCriteria.php
 * Last modified: 2023.02.22 at 10:53:38
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Criteria\Earnings;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class EarningOfEProviderCriteriaCriteria.
 *
 * @package namespace App\Criteria\Earnings;
 */
class EarningOfEProviderCriteria implements CriteriaInterface
{
    private $eproviderId;

    /**
     * EarningOfEProviderCriteriaCriteria constructor.
     */
    public function __construct($eproviderId)
    {
        $this->eproviderId = $eproviderId;
    }

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
        return $model->where("e_provider_id", $this->eproviderId);
    }
}
