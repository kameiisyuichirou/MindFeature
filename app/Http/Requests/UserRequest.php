<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [
            'name' => 'required | max:10',
            'kana' => 'required | max:10',
            'tel' => 'max:11 | nullable | regex:/^[0-9]+$/',
            'email' => 'required | email:filter,dns',
            'contact' => 'required'
        ];
    }
}
