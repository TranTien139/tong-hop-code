@extends('themes.master')
@section('tieude')
Thêm Tài Khoản
@endsection
@section('content')
           <div class="container">
           <div class="row">
           <div class="col-sm-12 col-xs-12"> 
           <div class="clearfix"></div>
          <div class="col-sm-offset-2 col-sm-8" style="padding:100px 0px">
           @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
               </div>
            @endif
        <form class="form-horizontal" action="{!! url('tai-khoan/tao-tai-khoan') !!}" method="POST">
                         <input type = "hidden" name="_token" value = "{!! csrf_token() !!}" >
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Email Đăng Nhập</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name = "txtemail" value="{{ old('email') }}" id="inputEmail3" placeholder="Email đăng nhập">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-3 control-label">Mật Khẩu</label>
                <div class="col-sm-9">
                  <input type="password" name = "txtpassword" class="form-control" id="inputPassword3" placeholder="Mật khẩu">
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword4" class="col-sm-3 control-label">Nhắc Lại Mật Khẩu</label>
                <div class="col-sm-9">
                  <input type="password" name = "txtrepassword" class="form-control" id="inputPassword4" placeholder="Nhắc lại mật khẩu">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4" class="col-sm-3 control-label">Họ Tên Đầy Đủ</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name = "txtfullname" value="{{ old('txtfullname') }}" id="inputEmail4" placeholder="Họ tên đầy đủ">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail5" class="col-sm-3 control-label">Ngày Sinh</label>
                <div class="col-sm-9">
                     <div class=" input-group">
                  <input type="text" class="form-control" name="txtbirthday" id="date" data-select="datepicker">
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
                  <button type="submit" class="btn btn-primary but-login">Đăng Kí</button>
                </div>
              </div>
            </form>
            </div>
            <div class="clearfix"></div>
            </div>
            </div>
            </div>

@stop
                               