<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'txtcatename'=>'required|unique:categorys,name'
        ];
    }
    public function messages()
    {
        return [
            'txtcatename.required'=>'Bạn phải nhập tên loại sản phẩm',
            'txtcatename.unique'=>'Tên lại sản phẩm đã tồn tại'
        ];
    }

}
