@extends('themes.master')
@section('tieude')
Sửa Tài Khoản
@endsection
@section('content')
                     
                     <div class="container">
                     <div class="row">
                    <div class="col-md-offset-2 col-md-8" style="padding:100px 0px;">
                            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
               </div>
            @endif
                         {{ Form::open(array('url'=>array('tai-khoan/sua-tai-khoan',$user_temp['id']),'method'=>'PUT','class'=>'form-horizontal')) }}
                        
                  <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Email Đăng Nhập</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name = "txtemail" value="{{ old('txtemail',isset($user_temp)?$user_temp['email']:null) }}" id="inputEmail3" placeholder="Email đăng nhập">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="col-sm-3 control-label">Họ Tên Đầy Đủ</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name = "txtfullname"  value="{{ old('txtfullname',isset($user_temp)?$user_temp['fullname']:null) }}" id="inputEmail4" placeholder="Họ tên đầy đủ">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail5" class="col-sm-3 control-label"  >Ngày Sinh</label>
                <div class="col-sm-9">
                     <div class=" input-group">
                  <input type="text" class="form-control" name="txtbirthday" id="date"  data-select="datepicker">
  <span class="input-group-btn"><button type="button" class="btn btn-primary" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
                </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail6" class="col-sm-3 control-label">Giới Tính</label>
                <div class="col-sm-9">
                  <select class="form-control" name="txtgender">
                  <option>Nam</option>
                  <option>Nữ</option>
                  </select>
                </div>
              </div>
              <input name="txtlevel" value="member" checked="" type="hidden">
              
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="txtagree_rule"> Tôi Đồng Ý Với Điều Khuản
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-primary but-login">Lưu Sửa</button>
                </div>
              </div>
                       {{ Form::close() }}
                    </div>
                    <div class="col-md-4"></div>
                    <div class="clearfix"></div>
                     </div>
                      </div>
@stop
