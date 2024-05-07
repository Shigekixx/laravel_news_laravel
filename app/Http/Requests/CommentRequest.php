<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'comment' => 'required|max:50',
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'コメントが空欄です',
            'title.max:50' => 'コメントは50文字以内で記入してください',
        ];
    }
    // バリデーションが成功した時に実行されるメソッド
    public function passedValidation()
    {
        // バリデーションが成功した時に実行したい処理

    }
}
