<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ServiceModel;
class ServiceController extends Controller
{
     public function index(){
    $service_temp =  ServiceModel::findOrFail('1');
    return view('admin.service_list',compact('service_temp')); }
    public function show($id)
    {
      echo "string";
    }
    public function edit()
    {
    $service_temp =  ServiceModel::findOrFail('1');
    return view('admin.service_edit',compact('service_temp'));
    }
    public function update(Request $request)
    {
        $service_temp =  ServiceModel::findOrFail('1');
        $service_temp->guarantee= $request->txtguarantee;
        $service_temp->transform= $request->txttransform;
        $service_temp->different= $request->txtdifferent;
        $service_temp->save();
       return redirect()->route('admin.service.index')->with(['flash_message'=>'Sửa thành công']);
    }
}
