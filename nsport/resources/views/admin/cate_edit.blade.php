@extends("admin.master_page")
@section("title")
Sửa loại sản phẩm
@stop
@section("content_admin")

                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa loại sản phẩm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        <div class="col-lg-7" style="padding-bottom:120px">
                    {{ Form::open(array('route'=>array('admin.category.update',$category_temp['id']),'method'=>'PUT')) }}
                            <div class="form-group">
                                <label>Thuộc nhóm sản phẩm</label>
                                <select class="form-control" name="parent_category">
                                    <option value="0"> Thuộc nhóm sản phẩm</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên nhóm sản phẩm</label>
                                <input class="form-control" name="txtcatename" value="{{ old('txtcatename',isset($category_temp)?$category_temp['name']:null) }}" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Sắp xếp</label>
                                <input class="form-control" name="txtorder" value="{{ old('txtorder',isset($category_temp)?$category_temp['order']:null) }}" placeholder="Please Enter Category Order" />
                            </div>
                            <div class="form-group">
                                <label>Xuất bản </label>
                                @if($category_temp['published'] == "yes")
                                <input type="checkbox" name="txtpublished" checked value="yes" >
                                @else
                                <input type="checkbox" name="txtpublished" value="yes" >
                                @endif
                            </div>
                            <button type="submit" class="btn btn-default">Lưu Sửa</button>
                            <button type="reset" class="btn btn-default">Load Lại</button>
                      {{ Form::close() }}
                    </div>
@stop