<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StroreUserRequest extends FormRequest
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
        $rules = [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phone_number' => 'required|max:15',
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'name.max' => 'Nama maksimal 50 karakter',
            'phone_number.max' => 'Nomor HP maksimal 15 karakter',
            'email.max' => 'Email maksimal 150 karakter',
            'email.unique' => 'Email sudah pernah digunakan',
            'password.min' => 'Password minimal 6 karakter',
            'avatar.mimes' => 'Format foto salah',
            'avatar.max' => 'maksimal ukuran foto 2MB',
        ];
    }
}
