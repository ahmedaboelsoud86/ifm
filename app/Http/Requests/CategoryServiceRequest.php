<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryServiceRequest extends FormRequest
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
            $category = $this->route()->parameter('category_service');
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:100', Rule::unique('category_service_translations', 'title')->ignore($category->id, 'category_service_id')]];
            }//end of for each
        }//end of if    
        else{
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:100', Rule::unique('category_service_translations', 'title')]];
            }//end of for each
        }       
        return $rules;
    }

    public function messages()
    {
       return [
        'en.title.required' => __('sliders.title_en_required'),
        'ar.title.required' => __('sliders.title_ar_required'),
        'en.title.unique' => __('sliders.name_en_unique'),
        'ar.title.unique' => __('sliders.name_ar_unique'),
        'en.title.max' => __('sliders.title_en_max'),
        'ar.title.max' => __('sliders.title_ar_max'),
       ];
    }
}
