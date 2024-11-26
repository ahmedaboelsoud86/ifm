<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AboutRequest extends FormRequest
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
                $rules += [$locale . '.title' => ['required','max:100']];
                $rules += [$locale . '.description' => ['required']];
            }//end of for each
            $rules += ['frist_image' => ['image','mimes:jpg,png,jpeg,gif','dimensions:min_width=600,min_height=600']];
            $rules += ['second_image' => ['image','mimes:jpg,png,jpeg,gif','dimensions:min_width=600,min_height=600']];
            $rules += ['number_of_years' => ['numeric','digits_between:1,3']];
        }
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required','max:100']];
            $rules += [$locale . '.description' => ['required']];
        }//end of for each
            $rules += ['frist_image' => ['required','image','mimes:jpg,png,jpeg,gif','dimensions:min_width=600,min_height=600']];
            $rules += ['second_image' => ['required','image','mimes:jpg,png,jpeg,gif','dimensions:min_width=600,min_height=600']];
            $rules += ['number_of_years' => ['required','numeric','digits_between:1,3']];
       
        return $rules;
    }

    public function messages()
    {
       return [
        'en.title.required' => __('about.title_en_required'),
        'ar.title.required' => __('about.title_ar_required'),
        'en.title.max' => __('about.title_en_max'),
        'ar.title.max' => __('about.title_ar_max'),

        'en.description.required' => __('about.description_en_required'),
        'ar.description.required' => __('about.description_ar_required'),

        'number_of_years.required' => __('about.number_of_years_required'),
        'number_of_years.numeric' => __('about.number_of_years_numeric'),
        
       ];
    }
}



