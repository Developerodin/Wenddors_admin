<?php
/*
 * File name: ExperienceRepository.php
 * Last modified: 2023.01.16 at 21:48:46
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Repositories;

use App\Models\Experience;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ExperienceRepository
 * @package App\Repositories
 * @version January 12, 2021, 11:16 am UTC
 *
 * @method Experience findWithoutFail($id, $columns = ['*'])
 * @method Experience find($id, $columns = ['*'])
 * @method Experience first($columns = ['*'])
 */
class ExperienceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'e_provider_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Experience::class;
    }
}
