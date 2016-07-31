<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\SliderModel;
class SliderController extends Controller
{
      public function index()
    { 
      $slide_temp = SliderModel::all();
      return view('admin.slider_list',compact('slide_temp'));
    }
    public function create()
    {   
        return view('admin.slider_add');
    }
    public function store(SliderRequest $request)
    {  
        $file_name = $request->file('txtimage')->getClientOriginalName();
        $slide= new SliderModel;
        $slide->name = $request->txtname;
        // $slide->alias = changeTitle($request->txtname);
        $slide->order = $request->txtorder;
        $slide->image = $file_name;
        $slide->published = $request->txtpublished;
        $request->file('txtimage')->move('public/image_upload/slider/', $file_name);
        $slide->save();
        return redirect()->route('admin.slider.index')->with(['flash_message'=>'Thêm thành công']);
    }
    public function show($id)
    {
      echo "string";
    }
    public function edit($id)
    {
    $slide_temp =  SliderModel::findOrFail($id);
    return view('admin.slider_edit',compact('slide_temp'));
    }
    public function update($id,SliderRequest $request)
    {
        $slide =  SliderModel::findOrFail($id);
        $slide->name = $request->txtname;
        // $slide->alias = changeTitle($request->txtname);
        $slide->order = $request->txtorder;
        $slide->published = $request->txtpublished;
        if(!empty($request->file('txtimage'))){
        $file_name = $request->file('txtimage')->getClientOriginalName();
        $request->file('txtimage')->move('public/image_upload/slider/', $file_name);
        $slide->image = $file_name;
        }else {
          $slide->image = $request->txtimage;
        }
       $slide->save();
       return redirect()->route('admin.slider.index')->with(['flash_message'=>'Sửa thànhcông']);
    }
    public function destroy($id)
    {   
    $slide =  SliderModel::findOrFail($id);
    $slide->delete();
    return redirect()->route('admin.slider.index')->with(['flash_message'=>'Xóa thành công']);;
	}
}
