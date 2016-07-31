<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\CategoryModel;
use App\ProductModel;
class CategoryController extends Controller
{
     public function index()
    { 
      $category_temp = CategoryModel::all();
      return view('admin.cate_list',compact('category_temp'));
    }
    public function create()
    {    
        $parent = CategoryModel::select('id','name','parent_id')->get()->toArray();
        return view('admin.cate_add',compact('parent'));
    }
    public function store(CategoryRequest $request)
    {
        $cate1 = new CategoryModel;
        $cate1->name = $request->txtcatename;
        $cate1->alias = changeTitle($request->txtcatename);
        $cate1->order = $request->txtorder;
        $cate1->published = $request->txtpublished;
        $cate1->parent_id = $request->parent_category;
        $cate1->save();
        return redirect()->route('admin.category.index')->with(['flash_message'=>'Thêm thành công']);
    }
    public function show($id)
    {
      echo "string";
    }
    public function edit($id)
    {
    $category_temp =  CategoryModel::findOrFail($id);
    $parent = CategoryModel::select('id','name','parent_id')->get()->toArray();
    return view('admin.cate_edit',compact('category_temp','parent'));
    }
    public function update($id,Request $request)
    {
        $cate1 =  CategoryModel::findOrFail($id);
        $cate1->name = $request->txtcatename;
        $cate1->alias = changeTitle($request->txtcatename);
        $cate1->order = $request->txtorder;
        $cate1->published = $request->txtpublished;
        $cate1->parent_id = $request->parent_category;
        $cate1->save();
       return redirect()->route('admin.category.index')->with(['flash_message'=>'Sửa thành công']);
    }
    public function destroy($id)
    {   
    $parent  = CategoryModel::where('parent_id',$id)->count();
    $product = ProductModel::where('category_id',$id)->count();
    if($parent ==0 && $product==0) 
    {
    $cate1 =  CategoryModel::findOrFail($id);
    $cate1->delete();
    return redirect()->route('admin.category.index')->with(['flash_message'=>'Xóa thành công']);
    } else{
        echo "<script type='text/javascript'>
         alert('Bạn không thể xóa mục sản phẩm này vì mục này có mục con');
        </script>";
    #return redirect()->back();
    }
}
}
