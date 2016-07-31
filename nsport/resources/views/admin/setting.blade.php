@extends("admin.master_page")
@section("title")
cài đặt
@stop
@section("content_admin") 
 
   {{ Form::open(array('url'=>'admin/getsetting','class'=>'asasasa')) }} 
   <div class="form-group">
     <label><h4>Cài Đặt</h4></label><br>
     <input type="radio" name="setting" name="langvi">Tiếng Việt
     <input type="radio" name="setting" name="langen">Tiếng Anh
   </div>
   {{ Form::close() }}      
@stop
