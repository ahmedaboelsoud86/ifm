<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FacilityRequest extends FormRequest
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
            $facilities = $this->route()->parameter('facility');
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:50', Rule::unique('facility_translations', 'title')->ignore($facilities->id, 'facility_id')]];
                $rules += [$locale . '.description' => ['required']];
            }//end of for each
            $rules += ['image' => ['image','mimes:jpg,png,jpeg,gif','dimensions:min_width=500,min_height=500']];
            //$rules += ['category_id' => ['required']];
        }//end of if    
        else{
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:50', Rule::unique('facility_translations', 'title')]];
                $rules += [$locale . '.description' => ['required']];
            }//end of for each
            $rules += ['image' => ['required','image','mimes:jpg,png,jpeg,gif','dimensions:min_width=1103,min_height=500']];
            $rules += ['icon' => ['required']];
            $rules += ['category_id' => ['required']];
        }
        
        return $rules;
    }

    public function messages()
    {
       return [
        'en.title.required' => __('about.title_en_required'),
        'ar.title.required' => __('about.title_ar_required'),
        'en.title.unique' => __('sliders.name_en_unique'),
        'ar.title.unique' => __('sliders.name_ar_unique'),
        'en.title.max' => __('facility.title_en_max'),
        'ar.title.max' => __('facility.title_ar_max'),
        'en.description.required' => __('about.description_en_required'),
        'ar.description.required' => __('about.description_ar_required'),
        'category_id.required' => __('about.category_id_required'),
       ];
    }
}
