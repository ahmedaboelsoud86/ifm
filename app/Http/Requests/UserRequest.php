<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $rules = [
            'name' => 'required|unique:users|max:100|min:2',
            'email' => 'required|email|unique:users|max:100',
            'password' => 'required|max:100|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ];
        return $rules;
    }

    
}
