@extends('themes.master')
@section('tieude')
Dịch Vụ
@endsection
@section('content')
<div class="container minheight500"> 
           <?php $service_temp =  DB::table('services')->where('id',1)->first(); ?>
           <div class="">
           <h2 class="head-introduce">sự hài lòng của bạn là mong muốn của chúng tôi</h2>
           <h2 class="guarantee">Bảo Hành</h2>
           {!! $service_temp->guarantee !!}
          </div>
      <div class="">
           <h2 class="guarantee">Vận Chuyển</h2>
           {!! $service_temp->transform !!}
      </div>
      <div>
      <h2 class="guarantee">vấn đề khác</h2>
        {!! $service_temp->different !!}
      </div>
</div>
<div class="container">
<div class="space100">
</div>
 </div>
@stop

