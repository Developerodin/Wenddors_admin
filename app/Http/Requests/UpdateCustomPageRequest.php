<?php
/*
 * File name: UpdateCustomPageRequest.php
 * Last modified: 2023.02.27 at 20:34:32
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Http\Requests;

use App\Models\CustomPage;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomPageRequest extends FormRequest
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
        return CustomPage::$rules;
    }
}
