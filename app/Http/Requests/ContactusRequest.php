<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactusRequest extends FormRequest
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
        $rules += ['yourname'  => ['required','max:100']];
        $rules += ['phone'     => ['required','digits_between:5,30','numeric']];
        $rules += ['email'     => ['required','max:100','email']];
        $rules += ['subject'   => ['required','max:100']];
        $rules += ['message'   => ['required','max:500']];
        return $rules;
    }

    public function messages()
    {
       return [
        'yourname.required' => __('site.yourname_required'),
        'yourname.max' => __('site.yourname_max'),

        'phone.required' => __('site.phone_required'),
        'phone.digits_between' => __('site.phone_max'),
        'phone.numeric' => __('site.phone_numeric'),

        'email.required' => __('site.email_required'),
        'email.max' => __('site.email_max'),
        'email.email' => __('site.email_email'),

        'subject.required' => __('site.subject_required'),
        'subject.max' => __('site.subject_max'),

        'message.required' => __('site.message_required'),
        'message.max' => __('site.message_max'),
        
        // 'en.top_header.required' => __('sliders.top_header_en_required'),
        // 'ar.top_header.required' => __('sliders.top_header_ar_required'),
        // 'en.top_header.max' => __('sliders.top_header_en_max'),
        // 'ar.top_header.max' => __('sliders.top_header_ar_max'),
        // 'en.buttom_header.required' => __('sliders.buttom_header_en_required'),
        // 'ar.buttom_header.required' => __('sliders.buttom_header_ar_required'),
        // 'en.buttom_header.max' => __('sliders.buttom_header_en_max'),
        // 'ar.buttom_header.max' => __('sliders.buttom_header_ar_max'),
        // 'linkto.required' => __('sliders.linkto_required'),
        // 'linkto.max' => __('sliders.linkto_max'),
       ];
    }
}
