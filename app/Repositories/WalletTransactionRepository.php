<?php
/*
 * File name: WalletTransactionRepository.php
 * Last modified: 2023.08.10 at 18:04:14
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Repositories;

use App\Models\WalletTransaction;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class WalletTransactionRepository
 * @package App\Repositories
 * @version August 8, 2021, 3:57 pm CEST
 *
 * @method WalletTransaction findWithoutFail($id, $columns = ['*'])
 * @method WalletTransaction find($id, $columns = ['*'])
 * @method WalletTransaction first($columns = ['*'])
 */
class WalletTransactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'amount',
        'description',
        'action',
        'wallet_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return WalletTransaction::class;
    }
}
