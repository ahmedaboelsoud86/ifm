<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
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
            $service = $this->route()->parameter('service');
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:50', Rule::unique('service_translations', 'title')->ignore($service->id, 'service_id')]];
                $rules += [$locale . '.description' => ['required']];
            }//end of for each
            $rules += ['image' => ['image','mimes:jpg,png,jpeg,gif','dimensions:width=1103,height=556']];
        }//end of if    
        else{
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.title' => ['required','max:50', Rule::unique('service_translations', 'title')]];
                $rules += [$locale . '.description' => ['required']];
            }//end of for each
            $rules += ['image' => ['required','image','mimes:jpg,png,jpeg,gif','dimensions:width=1103,height=556']];
        }
        
        return $rules;
    }

    public function messages()
    {
       return [
        'en.title.required' => 'Title En Is Required',
        'ar.title.required' => 'Title Ar Is Required',
        'en.title.unique' => __('sliders.name_en_unique'),
        'ar.title.unique' => __('sliders.name_ar_unique'),
        'en.title.max' => 'Title En only ( 50 Characters )',
        'ar.title.max' => 'Title Ar only ( 50 Characters )',
        'en.description.required' => __('about.description_en_required'),
        'ar.description.required' => __('about.description_ar_required'),
       ];
    }
}
