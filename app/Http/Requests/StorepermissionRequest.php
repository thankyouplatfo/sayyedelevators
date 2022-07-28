<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepermissionRequest extends FormRequest
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
            'name' => 'required|string|max:33|min:3|unique:permissions',
            'desc' => 'required|string|max:33|min:3|unique:permissions'
        ];
    }
}
