<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'nullable',
            'keywords'=>'nullable',
            'description'=>'nullable',
            'image'=>'required',
            'phone'=>'nullable',
            'email'=>'nullable',
            'adress_az'=>'nullable',
            'adress_en'=>'nullable',
            'adress_ru'=>'nullable',
            'facebook'=>'nullable',
            'instagram'=>'nullable',
            'linkedin'=>'nullable',
        ];
    }
}
