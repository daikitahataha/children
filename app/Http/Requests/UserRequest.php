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
     * @return array
     */
    public function rules()
    {
        $route = $this->route()->getName();
        switch ($route){
            case 'user_send_mail':
                return [
                    'email' => 'required|email|max:64|unique:user,email'
                ];
            break;
        }
        return [
            //
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'メールアドレス'
        ];
    }

    public function messages() {
        return [
            'email.email' => 'メールアドレスの形式で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.max:64' => 'メールアドレスは最大64文字で入力してください',
            'email.unique' => 'このメールアドレスはすでに登録されています'
        ];
    }
}
