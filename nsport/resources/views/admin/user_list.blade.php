@extends("admin.master_page")
@section("title")
Danh Sách Tài Khoản
@stop
@section("content_admin")
    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Tài Khoản
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-responsive  table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Số thứ tự</th>
                                <th>Địa Chỉ Email</th>
                                <th>Họ tên</th>
                                <th>Cấp Độ</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=0; ?>
                        @foreach($user_temp as $tv)
                          <?php $i = $i+1; ?>
                            <tr class="odd gradeX" align="center">
                                <td>{{ $i }}</td>
                                <td>{{ $tv->email }}</td>
                                <td>{{ $tv->fullname }}</td>
                                <td>{{ $tv->level}}</td>
                                <td class="center">
                                {!! Form::open(array('route' =>array('admin.user.destroy',$tv->id),'method'=>'DELETE')) !!}
                                <i class="fa fa-trash-o fa-fw"></i><button class="but_delete" onclick="return confirmdelete('bạn có chắc chắn xóa không')" type="submit" > Xóa</button>
                                {!! Form::close() !!}
                                </td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! route('admin.user.edit',$tv->id) !!}">Sửa</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

 @stop