<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTripRequest extends FormRequest
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
            '*.name' => 'required|unique:trips,name,',
            '*.continent' => 'required',
            '*.period' => 'required|integer|min:0',
            '*.price' => 'required|numeric|min:0',
            '*.country_id' => 'required',
        ];
    }
}
