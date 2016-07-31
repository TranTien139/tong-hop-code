@extends('themes.master')
@section('tieude')
Chi Tiết Tài Khoản
@endsection
@section('content')
<div class="container">
    <div class="space30"></div>
    <div class="row">
    <div class="col-sm-12">
      @if(Auth::check()) 
       <p>email:{{ Auth::user()->email }}</p>
       <p>Họ Tên Đầy Đủ:{{ Auth::user()->fullname }}</p>
       <p>Giới Tính:{{ Auth::user()->gender }}</p>
       <p>Ngày Sinh:{{ Auth::user()->birthday }}</p>
       <a href="{!! url('tai-khoan/sua-tai-khoan',[Auth::user()->id]) !!}">Sửa Tài Khoản</a>
      @else
       <div class="col-lg-12">
        @if(Session::has('flash_message'))
        <div class="alert alert_message alert-{{ Session::get('level_message') }}">
            {{ Session::get('flash_message') }}
        </div>
        @endif
        </div>
      @endif
    </div>
    </div>
    <div class="space30"></div>
    </div>
@stop