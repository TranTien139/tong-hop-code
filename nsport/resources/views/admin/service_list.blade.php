@extends("admin.master_page")
@section("title")
khối dữ liệu tĩnh
@stop
@section("content_admin")
  <div class="col-lg-12">
                        <h1 class="page-header">Dịch Vụ
                        </h1>
                    </div>
                    <div class="clearfix"></div>
         <ul class="list-group">
          <li class="list-group-item">chế độ bảo hành: {!! $service_temp->guarantee!!}</li>
          <li class="list-group-item">vận chuyển: {!! $service_temp->transform !!}</li>
           <li class="list-group-item">dịch vụ khác: {!! $service_temp->different !!}</li>
      </ul>
      <div class="clearfix"></div>
      <a href="{!! url('admin/service',[$service_temp->id,'edit']) !!}">Sửa Thông Tin </a>
@stop