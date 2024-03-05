<?php
/*
 * File name: UpdatePaymentStatusRequest.php
 * Last modified: 2023.01.12 at 00:22:25
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Http\Requests;

use App\Models\PaymentStatus;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentStatusRequest extends FormRequest
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
        return PaymentStatus::$rules;
    }
}
