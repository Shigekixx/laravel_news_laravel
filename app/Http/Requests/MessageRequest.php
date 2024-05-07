<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'title' => 'required|max:30',
            'message' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'title.required' => 'タイトルが空欄です',
            'title.max:30' => 'タイトルは30文字以内で記入してください',
            'message.required' => '本文が空欄です',
        ];
    }
    // バリデーションが成功した時に実行されるメソッド
    public function passedValidation()
    {
        // バリデーションが成功した時に実行したい処理

    }
}
