@extends('themes.master')
@section('tieude')
Nsport-Trang Chủ
@endsection
@section('content')
<?php  
$slider_temp =DB::table('sliders')->where('published','yes')->orderBy('id','DESC')->get();
$product_temp = DB::table('products')->where('published','yes')->orderBy('id','DESC')->get();
$cate_temp = DB::table('categorys')->where('published','yes')->orderBy('order','ASC')->get();
$help_online  = DB::table('blocks')->get();
 ?>
<div class="container felexslider">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12 ">
            <div class="homeslider" id="homeslider">
                      <ul class="slides">    
      @foreach ($slider_temp as $value)        
    <li>
        <a class="" href="" data-fancybox-group="gallery" ><img src="{{ asset('public/image_upload/slider/'.$value->image) }}" class="img-responsive" alt="no image" ></a>
    </li>
     @endforeach 
  </ul>
            </div>
        </div>
    </div>
    <?php $k=1 ?>
    @foreach($cate_temp as $item)
    <div class="row">
          <div class="col-md-12">
          <div class="title-home-product "><h1>{!! $item->name !!}</h1></div>
            <div class="item-home owl-carousel" id="owl-home{!! $k !!}" >
            <?php $k++ ?>
          @foreach($product_temp as $item1)
          @if($item1->category_id == $item->id)  
  <div class="item"><a href="{!! url('san-pham/san-pham-chi-tiet',[$item1->id,$item1->alias]) !!}"><img src="{{ asset('public/image_upload/product/'.$item1->image) }}" class="img-responsive" ></a><a href="{!! url('san-pham/san-pham-chi-tiet',[$item1->id,$item1->alias]) !!}"><h3 class="fourth-line">{!! $item1->name !!}</h3></a></div>
      @else
      @endif
      @endforeach
</div>

    </div>
      </div> 
      <div class="clearfix"></div>
      @endforeach
      <div class="space30"></div>
      </div>          
@stop