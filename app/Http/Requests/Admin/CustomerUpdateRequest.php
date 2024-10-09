<?php

namespace App\Http\Requests\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class CustomerUpdateRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' =>'required|email|unique:users,email,'.$request->id.",id",
            'phone' =>'required|numeric|digits:10|unique:users,phone,'.$request->id.",id",
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First Name is required',
            'last_name.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone number is required',
        ];
    }

    public function attributes()
    {
        return [
            //'email' => 'email or phone number'
        ];
    }
}
