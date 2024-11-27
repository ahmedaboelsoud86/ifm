<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PrivacyRequest extends FormRequest
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

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.description' => ['required']];
            }//end of for each
        }
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.description' => ['required']];
        }//end of for each
        return $rules;
    }

    public function messages()
    {
       return [
          'en.description.required' => __('about.description_en_required'),
          'ar.description.required' => __('about.description_ar_required'),
       ];
    }
}



