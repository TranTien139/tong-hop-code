@extends('themes.master')
@section('tieude')
Về Chúng Tôi
@endsection
@section('content')
<div class="container minheight500">
    <div class="">
    <h2 class="head-introduce">giới thiệu về công ty chúng tôi</h2>
        <div class="gioi_thieu">
         <?php $introduce= DB::table('blocks')->select('introduce')->get(); ?>
         @foreach($introduce as $value)
         <div>
           {!! $value->introduce !!}
         </div>
         @endforeach
        </div>
    </div>
</div>
<div class="container">
<div class="space100">
</div>
 </div>
@stop


