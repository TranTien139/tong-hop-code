@extends("admin.master_page")
@section("title")
dịch vụ
@stop
@section("content_admin")
 {{ Form::open(array('route'=>array('admin.service.update',$service_temp['id']),'method'=>'PUT','files'=> true)) }}  
   <div class="form-group">
                <label>bảo hành</label>
                <textarea style="width:100%; height:200px;" id="txtguarantee" name="txtguarantee">{{ old('txtguarantee',isset($service_temp)?$service_temp['guarantee']:null) }}</textarea>
                <script type="text/javascript"> $(function() {  var editor = CKEDITOR.replace('txtguarantee', { 
                filebrowserBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html")}}',
                filebrowserImageBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Images")}}',
                filebrowserFlashBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Flash") }}', 
                filebrowserUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                filebrowserImageUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                filebrowserFlashUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}',
                filebrowserWindowWidth : '900', filebrowserWindowHeight : '480' });
                CKFinder.setupCKEditor( editor, '{{ asset("public/admin/ckfinder/") }}' ); }); </script>
            </div>
  <div class="form-group">
                <label>vận chuyển</label>
                <textarea style="width:100%; height:200px;" id="txttransform" name="txttransform">{{ old('txttransform',isset($service_temp)?$service_temp['transform']:null) }}</textarea>
                <script type="text/javascript"> $(function() {  var editor = CKEDITOR.replace('txttransform', { 
                filebrowserBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html")}}',
                filebrowserImageBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Images")}}',
                filebrowserFlashBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Flash") }}', 
                filebrowserUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                filebrowserImageUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                filebrowserFlashUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}',
                filebrowserWindowWidth : '900', filebrowserWindowHeight : '480' });
                CKFinder.setupCKEditor( editor, '{{ asset("public/admin/ckfinder/") }}' ); }); </script>
            </div>

            <div class="form-group">
                <label>dịch vụ khác</label>
                <textarea style="width:100%; height:200px;" id="txtdifferent" name="txtdifferent">{{ old('txtdifferent',isset($service_temp)?$service_temp['different']:null) }}</textarea>
                <script type="text/javascript"> $(function() {  var editor = CKEDITOR.replace('txtdifferent', { 
                filebrowserBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html")}}',
                filebrowserImageBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Images")}}',
                filebrowserFlashBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Flash") }}', 
                filebrowserUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                filebrowserImageUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                filebrowserFlashUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}',
                filebrowserWindowWidth : '900', filebrowserWindowHeight : '480' });
                CKFinder.setupCKEditor( editor, '{{ asset("public/admin/ckfinder/") }}' ); }); </script>
            </div>

  <button type="submit" class="btn btn-default">Lưu sửa</button>
{{ Form::close() }}
@stop