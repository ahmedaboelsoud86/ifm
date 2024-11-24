<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeamRequest extends FormRequest
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
            $team = $this->route()->parameter('team');
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.username' => ['required','max:100', Rule::unique('team_translations', 'title')->ignore($team->id, 'team_id')]];
                $rules += [$locale . '.title' => ['required','max:100']];
            }//end of for each
            $rules += ['image' => ['image','mimes:jpg,png,jpeg,gif']];
        }//end of if    
        else{
            foreach (config('translatable.locales') as $locale) {
                $rules += [$locale . '.username' => ['required','max:100', Rule::unique('team_translations', 'team_id')]];
                $rules += [$locale . '.title' => ['required','max:100']];
            }//end of for each
            $rules += ['image' => ['required','image','mimes:jpg,png,jpeg,gif']];
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
