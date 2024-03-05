<?php
/*
 * File name: UpdateEProviderTypeRequest.php
 * Last modified: 2023.01.16 at 21:41:15
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Http\Requests;

use App\Models\EProviderType;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEProviderTypeRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return EProviderType::$rules;
    }
}
