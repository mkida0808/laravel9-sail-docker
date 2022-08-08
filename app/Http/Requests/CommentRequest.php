<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'body' => 'required',
        ];
    }

    /**
     * エラーメッセージをカスタマイズ（日本語化）
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'body.required' => 'コメントは必須です',
        ];
    }
}
