<?php
/*
 * File name: PaymentStatusRepository.php
 * Last modified: 2023.01.12 at 00:22:28
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Repositories;

use App\Models\PaymentStatus;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PaymentStatusRepository
 * @package App\Repositories
 * @version January 7, 2021, 4:47 pm UTC
 *
 * @method PaymentStatus findWithoutFail($id, $columns = ['*'])
 * @method PaymentStatus find($id, $columns = ['*'])
 * @method PaymentStatus first($columns = ['*'])
 */
class PaymentStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'status',
        'order'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PaymentStatus::class;
    }
}
