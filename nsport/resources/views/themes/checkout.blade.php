@extends('themes.master')
@section('tieude')
Thực Hiện Đặt Hàng
@endsection
@section('content')
<div class="space30"></div>
<div class="container minheight500">
<div div="col-sm-12">
  <h3>THÔNG TIN SẼ ĐƯỢC GỬI TỚI MAIL CỦA CÔNG TY, CÔNG TY SẺ CHỦ ĐỘNG LIÊN HỆ VỚI BẠN SỚN NHẤT</h3>
</div>
<div class="space30"></div>
<div class="row">
<div class="col-sm-6">
<form action="{!! url('thuc-hien-dat-hang') !!}" method="post" role="form">
<input name="_token" value="{!! csrf_token() !!}" type="hidden">
 <div class="form-group">
   <input type="text" class="form-control" name="txtname" placeholder = "nhập họ tên đầy đủ của bạn">
 </div>
<div class="form-group">
   <input type="text" class="form-control" name="txtadress" placeholder = "địa chỉ">
 </div>
 <div class="form-group">
   <input type="text" class="form-control" name="txtphone" placeholder = "số điện thoại">
 </div>
 <div class="form-group">
   <input type="text" class="form-control" name="txtemail" placeholder = "email">
 </div>
 <div class="form-group">
   <button type="submit" class="btn btn-primary">Gửi</button>
 </div>

</div>
<div class="col-sm-6">
  <div class="cart-info table-responsive">
        <table class="table  table-striped table-hover table-bordered">
          <tr>
            <th class="image">Ảnh</th>
            <th class="name">Tên Sản Phẩm</th>
            <th class="quantity">Số Lượng</th>
            <th class="price">Đơn Gía</th>
            <th class="total">Tổng Tiền</th>     
          </tr>
          @foreach($content as $item)
          <tr>
            <td class="image"><a ><img title="product" alt="product" src="{!! asset('public/image_upload/product/'.$item['options']['img']) !!}" height="50" width="50"></a></td>
            <td  class="name"><a >{!! $item['name'] !!}</a></td>
            <td class="quantity">{!! $item['qty'] !!}
             </td>
            <td class="price">{!! number_format($item['price'],0,",",".") !!}</td>
            <td class="total">{!! number_format($item['price']*$item['qty'],0,",",".") !!}</td>   
          </tr>
          @endforeach
        </table>
      </div>
      <p >Tổng Tiền</p>
      {!! number_format($total,0,",",".") !!}
</div>
</form>
</div>
</div>
@stop