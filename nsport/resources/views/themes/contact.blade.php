@extends('themes.master')
@section('tieude')
Liên Hệ
@endsection
@section('content')
<?php $contact = DB::table('blocks')->get(); ?>   
<div class="container">
    <div class="space30"></div>
                <div class="row"> 
                <div class="col-sm-12">          
        @foreach($contact as $item)             
        <div class="col-md-6 ">
            <div class="title-contact"><h1>Liên hệ với chúng tôi</h1></div>
             <div class="info-contact">
                <h1>Công ty TNHH Thuận Thiên An </h1>
                <p><i class="fa fa-home ">&nbsp;Địa chỉ:</i>&nbsp;<span>{{ $item->adress }}</span></p>
                <p><i class="fa fa-phone ">&nbsp;Hotline:</i>&nbsp;<span> {{ $item->phone1 }}</span></p>
                <p><i class="fa fa-phone-square">&nbsp;Tư vấn:</i> &nbsp;<span>{{ $item->phone2 }}</span></p>
                <p><i class="fa fa-envelope ">&nbsp;Email:</i> &nbsp;<span>{{ $item->email }}</span></p>
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="goolemap">
                {!! $item->linkgooglemap !!}
            </div>
        </div>
      @endforeach
        </div>
        </div>
</div>
@stop

