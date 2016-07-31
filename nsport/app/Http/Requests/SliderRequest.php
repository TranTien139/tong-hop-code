<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SliderRequest extends Request
{
  
    public function authorize()
    {
        return true;
    }
   public function rules()
    {
        return [
           'txtname'=>'required',
           'txtimage'=>'required',
        ];
    }
    public function messages()
    {
        return [
           'txtname.required'=>'Bạn phải nhập trường tên',
           'txtimage.required'=>'Bạn phải nhập trường ảnh',
        ];
    }

}
