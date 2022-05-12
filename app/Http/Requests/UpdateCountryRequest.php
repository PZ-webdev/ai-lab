<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCountryRequest extends FormRequest
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
            'name' => 'required|unique:countries,name,'.$this->country->id,
            'code' => 'required|unique:countries,code,'.$this->country->id.'|max:3',
            'currency' => 'required',
            'area' => 'required|integer|min:0',
            'language' => 'required',
        ];
    }
}