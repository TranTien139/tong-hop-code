@extends("admin.master_page")
@section("title")
Thêm slider
@stop
@section("content_admin")
        <div class="col-lg-12">
            <h1 class="page-header">Thêm slider
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7 col-md-7" style="padding-bottom:120px">
            <form action="{{ route('admin.slider.store') }}"  method="POST" enctype="multipart/form-data" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="form-group">
                    <label>tên slider</label>
                    <input class="form-control" name="txtname" placeholder="Tên slider" />
                </div>
                <div class="form-group">
                    <label>sắp xếp</label>
                    <input class="form-control" name="txtorder" placeholder="sắp xếp" />
                </div>
                <div class="form-group">
            <label>ảnh slider</label>
            <input type="file" name="txtimage" value="" id="previewFileSlider"><br>
            <img src="" id="image_slider" height="200" width="auto" alt="Ảnh Đại Diện ..">
           </div>
                <div class="form-group">
                    <label>xuất bản</label>
                    <input  type="checkbox" name="txtpublished" value="yes" />
                </div>
                <button type="submit" class="btn btn-default">Thêm Slider</button>
                <button type="reset" class="btn btn-default">Load lại</button>
              
              <form>
         </div>
    @stop


