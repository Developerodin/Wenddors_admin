<?php
/*
 * File name: EServiceReviewRepository.php
 * Last modified: 2023.01.23 at 21:01:19
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Repositories;

use App\Models\EServiceReview;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EServiceReviewRepository
 * @package App\Repositories
 * @version January 23, 2021, 7:42 pm UTC
 *
 * @method EServiceReview findWithoutFail($id, $columns = ['*'])
 * @method EServiceReview find($id, $columns = ['*'])
 * @method EServiceReview first($columns = ['*'])
 */
class EServiceReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'review',
        'rate',
        'user_id',
        'e_service_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EServiceReview::class;
    }
}
