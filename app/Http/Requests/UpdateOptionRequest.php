<?php
/*
 * File name: UpdateOptionRequest.php
 * Last modified: 2023.06.10 at 20:38:02
 * Author: - AOTJ -Mehul Kansara
 * Copyright (c) 2023
 */

namespace App\Http\Requests;

use App\Models\Option;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use InfyOm\Generator\Utils\ResponseUtil;

class UpdateOptionRequest extends FormRequest
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
     * Handle a failed validation attempt.
     *
     * @param Validator $validator
     * @return void
     *
     * @throws ValidationException
     */
    protected function failedValidation(Validator $validator)
    {
        if ($this->isJson()) {
            $errors = array_values($validator->errors()->getMessages());
            $errorsResponse = ResponseUtil::makeError($errors);
            throw new ValidationException($validator, response()->json($errorsResponse));
        } else {
            throw (new ValidationException($validator))
                ->errorBag($this->errorBag)
                ->redirectTo($this->getRedirectUrl());
        }

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Option::$rules;
    }
}
