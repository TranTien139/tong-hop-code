@extends("admin.master_page")
@section("title")
Nhóm Sản Phẩm
@stop
@section("content_admin")
    <div class="col-lg-12">
        <h1 class="page-header">Nhóm Sản Phẩm
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>stt</th>
                <th>tên nhóm sản phẩm</th>
                <th>thuộc nhóm sản phẩm</th>
                <th>tình trạng</th>
                <th>xóa</th>
                <th>sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php $k=0; ?>
            @foreach($category_temp as $cate)
            <?php $k=$k+1; ?>
            <tr class="even gradeC" align="center">
                <td>{{ $k }}</td>
                <td>{{ $cate->name }}</td>
                <?php
                  $data = DB::table('categorys')->where('id',$cate->parent_id)->get();
                 ?>
                <td>
                @foreach($data as $item)
                {{  $item->name }}
                @endforeach
                </td>
                <td>{{ $cate->published }}</td>
                <td>
                {!! Form::open(array('route' =>array('admin.category.destroy',$cate->id),'method'=>'DELETE')) !!}
                <i class="fa fa-trash-o fa-fw"></i><button class="but_delete" onclick="return confirmdelete('bạn có chắc chắn xóa không')" type="submit" > Xóa</button>
                {!! Form::close() !!}
                </td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.category.edit',$cate->id) }}">Sửa</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
