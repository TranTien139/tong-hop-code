Email người gửi:  {{ $email }} <br/>
Tên người gửi:  {{ $name }}  <br/>
Địa chỉ người gửi:  {{ $adress }} <br/>
Số điện thoại người gửi:  {{ $phone }} <br/>
<?php 
$content = Cart::content();
 $total = Cart::total();  ?>
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