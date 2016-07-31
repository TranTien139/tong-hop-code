<!DOCTYPE html>
<html lang="vi">
<head>
	<title>@yield("tieude")</title>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('public/image_upload/logo/logo.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/flexslider.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/jquery.mmenu.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/jquery.fancybox.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/jquery.datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/cloud-zoom.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.css') }}" >
	  <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}" >
</head>
<body >  
<div class="container border-bottom-top">
    <div class="top_header">
            <div class="row">
             <div class="col-md-4 col-sm-6">
                <div class="pull-left date-time">
                    <p><?php sw_get_current_weekday();  ?></p>
                </div>
        </div>
     
        <div class="col-md-8 col-sm-6">
                <ul class="list-inline top_menu" >
                    @if(Auth::check() && Auth::user()->level == "member") 
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xin Chào:&nbsp;{{ Auth::user()->fullname }}&nbsp;&nbsp;&nbsp;<span><i class="fa fa-user"></i></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('tai-khoan') }}">Tài khoản của tôi</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="{{ url('tai-khoan/sua-tai-khoan',Auth::user()->id) }}">Sửa thông tin tài khoản</a></li>                      
                       <li role="separator" class="divider"></li>
                      <li><a  data-toggle="modal" data-target="#ModalChagepassFrontEnd">Đổi Mật Khẩu</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="{{ url('logout') }}">Thoát Đăng Nhập</a></li>
                    </ul>
                  </li>
                    @else
                    <li ><a href="{{ url('dang-nhap') }}">Đăng Nhập &nbsp;&nbsp;<span><i class="fa fa-user"></i></span></a></li>
                    <li><a href="{{ url('tai-khoan/tao-tai-khoan') }}">Đăng Kí &nbsp;&nbsp;<span><i class="fa fa-registered"></i></span></a></li>
                    @endif
                </ul> 
            </div>
        </div>  
</div>
    </div>
<div class="container">
    <div class="row">
<div class="logo col-md-3 col-sm-3">
    <a href="{{ URL::to('/') }}">
           <?php  $logo = DB::table('blocks')->select('logo','phone1','phone2')->get(); ?>
           <?php  $catemenu = DB::table('categorys')->where("published","yes")->orderBy("order","ASC")->get(); ?>
      @foreach($logo as $item)
      <img src="{!! asset('public/image_upload/logo/'.$item->logo) !!}" alt="no logo" class="img-responsive"></a>
      @endforeach
</div>
<div class="col-md-5 col-sm-5 slogan">
  <h2>Công Ty TNHH Thuận Thiên An</h2>
</div>
<div class="col-md-4 col-sm-9 padding-left0">
    <ul class="list-inline list-midle-header">
        <li><a href=""><img src="{{ asset('public/img/hotline.png') }}" alt="no logo" class="img-responsive"></a><a href="">hotline
         @foreach($logo as $item)
        <p>{{ $item->phone1 }}</p>
         @endforeach
        </a></li>
        <?php $item = Cart::count(); $total1 = Cart::total(); ?>
        <li><a href="{!! url('gio-hang') !!}"><img src="{{ asset('public/img/cart.png') }}" alt="no logo" class="img-responsive"></a><a href="{!! url('gio-hang') !!}">({!! $item; !!})Sản phẩm<p>Gía {!! number_format($total1,0,",",".") !!} VNĐ</p></a></li>
    </ul>
</div>
     </div>
    </div>
    <div class="bottom-menu">
    <div class="container">
    <div class="row ">

     <nav id="menu">
  <ul>
  <li class="<?php if(Request::segment(1)==null){echo 'active';} ?>" ><a href="{{ url('/') }}">Trang chủ</a></li>
        <li class="<?php if(Request::segment(1)=='san-pham'){echo 'active';} ?>"><a href="{{ url('san-pham') }}">Sản phẩm</a>
         <ul>
         @foreach($catemenu as $item)
          <li><a href="{!! url('san-pham/loc-san-pham',[$item->alias]) !!}">{!! $item->name !!}</a></li>
        @endforeach
        </ul>
        </li>
        <li class="<?php if(Request::segment(1)=='gioi-thieu'){echo 'active';} ?>"><a href="{{ url('gioi-thieu') }}">Về chúng tôi</a></li>
        <li class="<?php if(Request::segment(1)=='dich-vu'){echo 'active';} ?>"><a href="{{ url('dich-vu') }}">Dịch vụ</a></li>
        <li class="<?php if(Request::segment(1)=='lien-he'){echo 'active';} ?>"><a href="{{ url('lien-he') }}">Liên hệ</a></li>
        <li>
         <form role="search" action="{{url('home/searchredirect')}}" >
         <div class="input-group form-search">
             <input type="text" class="form-control" name="txtsearch" placeholder="tìm kiếm sản phẩm" value="">
      <span class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>
    </div>
    </form>
        </li>
  </ul>
</nav> 
        <nav class="navbar navbar-default" id="main_menu">
         <div class="navbar-header">
      <a href="#menu" type="button" class="navbar-toggle collapsed" >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
<div class="feature-menu main_menu" >
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav list-main-menu">
        <li class="<?php if(Request::segment(1)==null){echo 'active';} ?>" ><a href="{{ url('/') }}">Trang chủ</a></li>
        <li class="<?php if(Request::segment(1)=='san-pham'){echo 'active';} ?>"><a href="{{ url('san-pham') }}">Sản phẩm</a>
         <ul>
         @foreach($catemenu as $item)
          <li><a href="{!! url('san-pham/loc-san-pham',[$item->alias]) !!}">{!! $item->name !!}</a></li>
        @endforeach
        </ul>
        </li>
        <li class="<?php if(Request::segment(1)=='gioi-thieu'){echo 'active';} ?>"><a href="{{ url('gioi-thieu') }}">Về chúng tôi</a></li>
        <li class="<?php if(Request::segment(1)=='dich-vu'){echo 'active';} ?>"><a href="{{ url('dich-vu') }}">Dịch vụ</a></li>
        <li class="<?php if(Request::segment(1)=='lien-he'){echo 'active';} ?>"><a href="{{ url('lien-he') }}">Liên hệ</a></li>
      </ul>
    <form role="search" action="{{url('home/searchredirect')}}" >
         <div class="input-group form-search">
             <input type="text" class="form-control" name="txtsearch" placeholder="tìm kiếm sản phẩm" value="">
      <span class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
      </span>
    </div>
    </form>
</div>
</div>
 </nav>

    </div>
</div>
    </div>