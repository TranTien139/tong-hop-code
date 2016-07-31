
<footer>
<div class="footer">
<div class="container">
        <div class="footer1">
        <div class="row">
       <?php  $contact_temp = DB::table('blocks')->select('id','linkfacebook','linktwitter','linkgoogleplus','phone1','phone2','email','adress','linkgooglemap','logo')->get(); ?>
            <div class=" col-sm-4 col-xs-12 foot1">
                <h3>VỀ CHÚNG TÔI</h3>
                <ul>
                    <li><i class="fa fa-angle-double-right"></i>&nbsp;<a href="{!! url('gioi-thieu') !!}">Giới thiệu</a></li>
                     <li><i class="fa fa-angle-double-right"></i>&nbsp;<a href="{!! url('dich-vu') !!}">Dịch vụ</a> </li> 
                     <li><i class="fa fa-angle-double-right"></i>&nbsp;<a href="{!! url('lien-he') !!}">Liên hệ</a></li>                  
                </ul>
            </div>
            <div class=" col-sm-4 col-xs-12 foot3">
                  <h3>ĐĂNG KÍ NHẬN TIN KHUYẾN MẠI</h3> 
                  @foreach($contact_temp as $item)         
                     <ul class="list-inline">
                     <li><a href="{{ $item->linkfacebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="{{ $item->linktwitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>   
                     <li><a href="{{ $item->linkgoogleplus }}" target="_blank"><i class="fa fa-google-plus"></i></a></li>  
                  </ul>
                  @endforeach
           <div class="input-group subcribe">
      <form action="{{ url('nhan-tin-khuyen-mai') }}" method="post" role="form" id="" class="mail-letter">
      <input name="_token" value="{!! csrf_token() !!}" type="hidden">
         <input type="email" name="txtnewletter" class="form-control " placeholder="đăng kí nhận tin khuyến mại">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" type="button">ĐĂNG KÍ</button>
      </span>
      </form>
    </div><!-- /input-group -->
            </div>
            <div class=" col-sm-4 col-xs-12 foot4">
                <h3>LIÊN HỆ</h3>
                @foreach($contact_temp as $item) 
                <ul>
                    <li><i class="fa fa-map-marker"></i><span>{{ $item->adress }}</span></li>
                    <li><i class="fa fa-envelope"></i><span>{{ $item->email }}</span></li>
                    <li><i class="fa fa-phone"></i><span>{{ $item->phone1 }}</span></li>                      
                    <li><span>{{ $item->phone2 }}</span></li>                      
                </ul>
                @endforeach
            </div> 
        </div>  
          </div>        
    </div>
    </div>
    <div class="bg-coppy">
    <div class="container">
<div class="coppyright-top">
<div class="row">
<div class="col-md-12">
    <div class="copyright"><p>2016 @ All rights reserved.</p></div>
</div>
</div>
</div>
</div>
</div>
</footer>
<div class="container">
  <div class="row">
        <!-- Modal Change password -->
@if(Auth::check())
<div class="modal fade" id="ModalChagepassFrontEnd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel1">Thay Đổi Mật Khẩu</h4>
      </div>
      <div class="modal-body">
    
         {{ Form::open(array('url'=>'doi-mat-khau', 'class'=>'block small center')) }}
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
        <input type = "hidden" name="txtid" value = "{!! Auth::user()->id !!}" >
        <input type = "hidden" name="txtemail" value = "{!! Auth::user()->email !!}" >
        <input type = "hidden" name="txtfullname" value = "{!! Auth::user()->fullname !!}" >
        <input type = "hidden" name="txtbirthday" value = "{!! Auth::user()->birthday !!}" >
        <input type = "hidden" name="txtgender" value = "{!! Auth::user()->gender !!}" >
        <input type = "hidden" name="txtlevel" value = "{!! Auth::user()->level !!}" >
         <input type = "hidden" name="txtavatar" value = "{!! Auth::user()->avatar !!}" >
    <div class="form-group">
    {{ Form::password('txtold_password', array('class'=>'form-control', 'placeholder'=>'Mật Khẩu Cũ')) }}
    </div>
    <div class="form-group">
    {{ Form::password('txtchangepassword', array('class'=>'form-control', 'placeholder'=>'Mật Khẩu Mới')) }}
    </div>
    <div class="form-group">
    {{ Form::password('txtconfirm_new_password', array('class'=>'form-control', 'placeholder'=>'Nhập Lại Mật Khẩu Mới')) }}
    </div>
    <div class="form-group">
    {{ Form::submit('Lưu Thay Đổi', array('class'=>'btn btn-primary'))}}
    </div>
     {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@else
@endif
  </div>
</div>
<div id='bttop'><i class="fa fa-arrow-circle-up fa-2x"></i></div>
<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('meta[property="og:title"]').getAttribute('content') );var ga = document.createElement('script'); ga.type = 'text/javascript';ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=7d2adbe1c43a86b35932992bc22d4ad0&data=eyJzc29faWQiOjM4MTg1NzAsImhhc2giOiIyNzU5ZDM4OWJiMjM4M2VlNTNkZmZjM2NlNzM1YTk5ZCJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script><noscript><a href="http://www.vatgia.com" title="vatgia.com" target="_blank">Tài trợ bởi vatgia.com</a></noscript><noscript><a href="http://vchat.vn" title="vchat.vn" target="_blank">Phát triển bởi vchat.vn</a></noscript>  
<script type="text/javascript" src= "{{ asset('public/js/jquery-1.11.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.datepicker.min.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/js/jquery.ellipsis.min.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/js/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/js/jquery.mmenu.min.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/js/cloud-zoom.js') }}"></script>
    <script type="text/javascript" src= "{{ asset('public/js/owl.carousel.min.js') }}"></script>   
    <script type="text/javascript" src= "{{ asset('public/js/customjs.js') }}"></script>
    
 <div id="fb-root"></div>
 <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 

<script  type='text/javascript'>$(function(){
$(window).scroll(function(){if($(this).scrollTop()!==0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});
$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});</script>
</body>
</html>