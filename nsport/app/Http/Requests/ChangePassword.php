<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ChangePassword extends Request
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

    public function rules()
    {
        return [
        'txtold_password' => 'required|alphaNum|between:8,20',
         'txtchangepassword' => 'required|alphaNum|between:8,20',
        ];
    }
     public function messages()
    {
        return [
           'txtold_password.required'=>'Bạn Phải Nhập Mật Khẩu Cũ', 
           'txtold_password.alphaNum'=>'  Mật Khẩu Cũ Phải Chứa Số Và Chữ',
           'txtold_password.between'=>' Mật Khẩu Cũ Phải 8-20 Kí Tự', 
            'txtchangepassword.required'=>'Bạn Phải Nhập Mật Khẩu', 
           'txtchangepassword.alphaNum'=>'  Mật Khẩu  Phải Chứa Số Và Chữ',
           'txtchangepassword.between'=>' Mật Khẩu Phải 8-20 Kí Tự', 
           // 'txtchangepassword.confirmed'=>' Mật Khẩu Phải Khớp', 
        ];
    }
}
