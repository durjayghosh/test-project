<?php

namespace App\Http\Requests\Admin;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class RoleUpdateRequest extends FormRequest
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
            'role' => 'required',
            'status' => 'required'
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
