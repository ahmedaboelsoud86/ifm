<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactinfoRequest extends FormRequest
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
   
        $rules += ['adress_en' => ['required','max:100']];
        $rules += ['adress_ar' => ['required','max:100']];
        $rules += ['phone'     => ['required','numeric']];
        $rules += ['email'     => ['required','email']];
        $rules += ['whatsapp'  => ['required','max:100']];
        $rules += ['linkedin'  => ['required','max:100']];
        $rules += ['youtube'   => ['required','max:100']];
        $rules += ['instagram' => ['required','max:100']];
        $rules += ['facebok'   => ['required','max:100']];
        $rules += ['twitter'   => ['required','max:100']];

            // $rules += [$locale . '.title' => ['required','max:100', Rule::unique('slider_translations', 'title')]];
            // $rules += [$locale . '.top_header' => ['required','max:100']];
            //     $rules += [$locale . '.buttom_header' => ['required','max:100']];
           
        return $rules;
    }

    // public function messages()
    // {
    //    return [
    //     'en.title.required' => __('sliders.title_en_required'),
    //     'ar.title.required' => __('sliders.title_ar_required'),
    //     'en.title.unique' => __('sliders.name_en_unique'),
    //     'ar.title.unique' => __('sliders.name_ar_unique'),
    //     'en.title.max' => __('sliders.title_en_max'),
    //     'ar.title.max' => __('sliders.title_ar_max'),
    //     'en.top_header.required' => __('sliders.top_header_en_required'),
    //     'ar.top_header.required' => __('sliders.top_header_ar_required'),
    //     'en.top_header.max' => __('sliders.top_header_en_max'),
    //     'ar.top_header.max' => __('sliders.top_header_ar_max'),
    //     'en.buttom_header.required' => __('sliders.buttom_header_en_required'),
    //     'ar.buttom_header.required' => __('sliders.buttom_header_ar_required'),
    //     'en.buttom_header.max' => __('sliders.buttom_header_en_max'),
    //     'ar.buttom_header.max' => __('sliders.buttom_header_ar_max'),
    //     'linkto.required' => __('sliders.linkto_required'),
    //     'linkto.max' => __('sliders.linkto_max'),
    //    ];
    // }
}
