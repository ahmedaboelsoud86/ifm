<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PowerServiceRequest extends FormRequest
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
            $power_service = $this->route()->parameter('power_service');
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:100', Rule::unique('power_service_translations', 'title')->ignore($power_service->id, 'power_service_id')]];
                $rules += [$locale . '.description' => ['required']];
            }//end of for each
        }//end of if    
        else{
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:100', Rule::unique('power_service_translations', 'title')]];
                $rules += [$locale . '.description' => ['required']];
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
        'en.description.required' => __('about.description_en_required'),
        'ar.description.required' => __('about.description_ar_required'),
       ];
    }
}
