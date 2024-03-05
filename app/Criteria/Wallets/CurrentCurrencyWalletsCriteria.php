<?php
/*
 * File name: CurrentCurrencyWalletsCriteria.php
 * Last modified: 2023.08.10 at 18:03:35
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Criteria\Wallets;

use DB;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class CurrentCurrencyWalletsCriteria.
 *
 * @package namespace App\Criteria\Options;
 */
class CurrentCurrencyWalletsCriteria implements CriteriaInterface
{

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
        $currencyCode = DB::raw("json_extract(currency, '$.code')");
        return $model->where($currencyCode, setting('default_currency_code'));
    }
}
