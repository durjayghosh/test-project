<?php

namespace App\Http\Requests\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class AgentUpdateRequest extends FormRequest
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
        // dd($request->all());
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' =>'required|email|unique:users,email,'.$request->id.",id",
            'status' => 'required',
            'role' => $request->role != 1  ? 'required' : '',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First Name is required',
            'last_name.required' => 'Last Name is required',
            'email.required' => 'Email is required',
            'status.required' => 'Status is required'
        ];
    }

    public function attributes()
    {
        return [
            //'email' => 'email or phone number'
        ];
    }
}
