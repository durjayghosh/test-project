<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
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
            'excel' => 'required',
            'brand_id' => 'required'
        ];
    }

    public function messages()
    {
        return [

        ];
    }

    public function attributes()
    {
        return [
            //'email' => 'email or phone number'
        ];
    }
}
