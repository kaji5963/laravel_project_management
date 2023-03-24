<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'max:50'],
            'email' => ['required'],
            'password' => ['required'],
            'role' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name' => 'ユーザー名は必須入力及び50文字以内です',
            'email' => 'メールアドレスは必須入力です',
            'password' => 'パスワードは必須入力です',
            'role' => '権限は必須入力です',
        ];
    }
}
