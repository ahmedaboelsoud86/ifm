<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class HelpRequest extends FormRequest
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
        $rules = [];
        $rules += ['title' => ['required','max:100']];
        $rules += ['first_name' => ['required','max:100']];
        $rules += ['last_name' => ['required','max:100']];
        $rules += ['email' => ['required','email','max:100']];
        $rules += ['phone' => ['required','digits_between:5,30']];
        $rules += ['company_name' => ['required','max:100']];
        $rules += ['company_size' => ['required']];
        $rules += ['agree' => ['required']];
        $rules += ['read' => ['required']];
        return $rules;
    }

    public function messages()
    {
       return [
        'agree.required' => __('site.agree_required'),
        'read.required' => __('site.read_required'),
       ];
    }
}
