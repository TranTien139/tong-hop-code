@extends("admin.master_page")
@section("title")
Danh Sách Slider
@stop
@section("content_admin")
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Slider
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>stt</th>
                                <th>tên</th>
                                <th>image</th>
                                <th>xuất bản</th>
                                <th>xóa</th>
                                <th>sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $i=0 ?>
                           @foreach($slide_temp as $prod)
                           <?php $i=$i+1 ?>
                            <tr class="even gradeC" align="center">
                                <td>{{ $i }}</td>
                                <td>{{ $prod->name }}</td>
                                <td>
                                <img src="{!! asset('public/image_upload/slider/'.$prod->image ) !!}" width="100px" height="50px" alt="null">
                                </td>
                                <td>{{ $prod->published }}</td>
                                <td class="center">
                                 {!! Form::open(array('route' =>array('admin.slider.destroy',$prod->id),'method'=>'DELETE')) !!}
                                <i class="fa fa-trash-o fa-fw"></i><button class="but_delete" onclick="return confirmdelete('bạn có chắc chắn xóa không')" type="submit" > Xóa</button>
                                {!! Form::close() !!}
                                </td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.slider.edit',$prod->id) }}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
  @stop
