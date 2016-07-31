@extends('themes.master')
@section('tieude')
Đăng Nhập
@endsection
@section('content')
<div class="container">
    <div class="space30"></div>
    <div class="row">
    <div class="col-sm-12 col-xs-12">  
       @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
           </div>
        @endif
        <div class="col-sm-offset-4 col-sm-4">
                <form class="form-horizontal" role="form" method="post" action="{{ route('postlogin_frontend') }}" id="form-login">
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <div class="form-group">
      <label for="inputEmail1" class="  control-label">Email:<span class="red">*</span></label>
    <div class="">
        <input type="email" name="txtemail" class="form-control" value="" id="inputEmail1" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class=" no-padding control-label">Mật khẩu:<span class="red">*</span></label>
    <div class="">
        <input type="password" class="form-control" name="txtpassword" value="" id="inputPassword1" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class=" ">
      <div class="checkbox">
        <label>
            <input type="checkbox" name="remember_me"> ghi nhớ mật khẩu
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="">
      <button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
<div class="space30"></div>
  </div>
@stop