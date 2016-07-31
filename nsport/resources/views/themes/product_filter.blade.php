@extends('themes.master')
@section('tieude')
Sản Phẩm
@endsection
@section('content')
<div class="container minheight500">
    <div class="space30"></div>
    <div class="row">
        <div class="col-md-3 hidden-xs col-sm-3">
            <div class="list-category list-product " id="sidebar">
                <h4>danh mục</h4> 
               <?php     $categoty_temp  = DB::table('categorys')->where('parent_id',0)->where('published','yes')->get();  ?> 
                
                <div class="category-women">           
                    <ul>
                    @foreach($categoty_temp as $item) 
                        <li><a href="{!! url('san-pham/loc-san-pham',[$item->alias]) !!}">{{ $item->name }}</a></li>
                    @endforeach 
                    </ul>
                </div>  
            </div>  
        </div>
      @foreach($categoty_temp as $item) 
      @if(Request::segment(3)== $item->alias)
      <div class="col-md-9 col-sm-9">
         <div id="content"> 
          <div class="title-home-product"><h1>{{ $item->name }}</h1></div>
          <div class="section">
          <div class="sub" id="{{ $item->alias }}" >
          <div class="row"> 
          <div class="col-sm-12"> 
          <?php  $product_temp  = DB::table('products')->where('category_id',$item->id)->where('published','yes')->get(); ?>
          @foreach($product_temp as $item1) 
            <div class="col-md-4 padding7">
                <div class="item-product">        
                  <div class="box-product">        
                  <a ><img src="{{ asset('public/image_upload/product/'.$item1->image) }}" alt="no logo" class="img-responsive ">@if($item1->price_saleoff != 0)<h4 class="salooff">sale</h4>@else @endif
                  </a>
                  <p class="detail"><a href="{{ url('san-pham/san-pham-chi-tiet',[$item1->id,$item1->alias]) }}">chi tiết</a></p>
                  </div>
                  <div class="padding10">                 
                    <a href="{{ url('san-pham/san-pham-chi-tiet',[$item1->id,$item1->alias]) }}" class="three-line">{{ $item1->name }}</a>
                    <ul class="list-inline price-home">
                        @if($item1->price_saleoff ==0)
                        <li></li>
                        <li>Giá:&nbsp;{{ $item1->price }}<span>&nbsp;VNĐ</span></li>
                        @else
                        <li>Giá:&nbsp;{{ $item1->price }}<span>&nbsp;VNĐ</span></li>
                        <li>Giảm:&nbsp;{{ $item1->price_saleoff }}<span>&nbsp;%</span></li>
                        @endif
                    </ul>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            </div>                                  
            </div>
        </div>      
      </div>
</div>
@else
@endif
@endforeach 
</div>
<div class="space80"></div>
</div>
@stop
