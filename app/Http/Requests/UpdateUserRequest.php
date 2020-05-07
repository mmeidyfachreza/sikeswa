<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MatchOldPassword;

class UpdateUserRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email,'.$this->route('user'),
            'phone_number' => 'required|max:15',
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
        if ($this->current_password!=Null && $this->password!=Null && $this->new_confirm_password!=Null) {
            $rules['current_password'] = new MatchOldPassword;
            $rules['password'] = 'min:6';
            $rules['new_confirm_password'] = 'same:password';
        }
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
