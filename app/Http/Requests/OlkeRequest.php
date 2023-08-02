<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OlkeRequest extends FormRequest
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
            'title_az'=>'required',
            'title_en'=>'nullable',
            'title_ru'=>'nullable',
            'description_az'=>'required',
            'description_en'=>'nullable',
            'description_ru'=>'nullable',
            'link'=>'required',
            'image'=>'nullable'
        ];
    }
}
