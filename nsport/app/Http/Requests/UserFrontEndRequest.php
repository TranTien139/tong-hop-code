<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserFrontEndRequest extends Request
{
      public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'txtemail'=>'required',
            'txtpassword'=>'required'
        ];
    }
      public function messages(){
             return [
            'txtemail.required'=>'Vui lòng nhập địa chỉ email',
            'txtpassword.required'=>'Vui lòng nhập mật khẩu'
        ]; 
        }
}
