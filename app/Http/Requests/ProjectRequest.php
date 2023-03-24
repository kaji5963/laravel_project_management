<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'description' => ['required', 'max:255'],
            'customer' => ['required', 'max:50'],
            'skills' => ['required'],
            'assignees' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name' => 'プロジェクト名は必須入力及び50文字以内です',
            'description' => 'プロジェクト内容は必須入力及び255文字以内です',
            'customer' => '顧客は必須入力及び50文字以内です',
            'skills' => '技術は必須入力です',
            'assignees' => 'アサインは必須入力です',
        ];
    }
}
