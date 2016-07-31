@extends("admin.master_page")
@section("title")
Sửa Slider
@stop
@section("content_admin")
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa Slider
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                         {{ Form::open(array('route'=>array('admin.slider.update',$slide_temp['id']),'method'=>'PUT','files'=> true)) }}   
               <div class="form-group">
                    <label>tên slider</label>
                    <input class="form-control" name="txtname" value="{{old('txtname',isset($slide_temp)?$slide_temp['name']:null) }}" placeholder="Tên slider" />
                </div>
                <div class="form-group">
                    <label>sắp xếp</label>
                    <input class="form-control" name="txtorder" value="{{old('txtorder',isset($slide_temp)?$slide_temp['order']:null) }}" placeholder="sắp xếp" />
                </div>
            <div class="form-group">
                    <label>ảnh slider</label>
                    <div class="img_product">
                      <img src="{{ asset('public/image_upload/slider/'.$slide_temp['image']) }}" class="img-responsive " id="image_slider" >
                     <input type="hidden" name="txtimage" value="{{ $slide_temp['image'] }}">
                     </div>
                    <input id="previewFileSlider" type="file" name="txtimage" placeholder="nhập ảnh" />
                </div>
               <div class="form-group">
                    <label>Published</label>
                    @if($slide_temp['published'] == "yes")
                                <input type="checkbox" name="txtpublished" checked value="yes" >
                                @else
                                <input type="checkbox" name="txtpublished" value="yes" >
                                @endif
                </div>
                <button type="submit" class="btn btn-default">Lưu Sửa</button>
                <button type="reset" class="btn btn-default">Load lại</button>
                  
                     {{ Form::close() }}
                       </div>
                 
 @stop