<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommunicationRequest extends FormRequest
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
            //
            'welcome' => 'required|string|max:255|min:3',
            'city_id' => 'integer',
            'country_id' => 'integer',
            'url' => 'required|url',
            'phone' => 'required|numeric',
            'email' => 'required|string|max:255|min:8|email',
        ];
    }
}
