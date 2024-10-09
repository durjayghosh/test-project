<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AgentStoreRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'status' => 'required',
            'password' => 'required|min:5',
            'confirm_password' => 'required|min:5|same:password',
            'role' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First Name is required',
            'last_name.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            'status.required' => 'Status is required',
            'password.required' => 'Password is required'
        ];
    }

    public function attributes()
    {
        return [
            //'email' => 'email or phone number'
        ];
    }
}
