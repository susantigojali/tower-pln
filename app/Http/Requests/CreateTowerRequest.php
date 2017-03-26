<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTowerRequest extends FormRequest
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
        return [
            'name' => 'required|unique:towers|max:255',
            'long1' => 'required',
            'lat1' => 'required',
            'long2' => 'required',
            'lat2' => 'required',
            'long3' => 'required',
            'lat3' => 'required',
            'long4' => 'required',
            'lat4' => 'required',

        ];
    }
}
