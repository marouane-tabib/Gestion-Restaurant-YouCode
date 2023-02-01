<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            // 'email' => 'required',
            'email' => 'required|string|email|max:255|min:5|unique:users,email',
            'password' => 'required|confirmed|string|min:8',
            'password_confirmation' => 'required|min:8'
        ];
    }
}
