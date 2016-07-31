<?php
 function stringUnicode($str){ 
    if(!$str) return false;
 $unicode = array(
 'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
 'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 
 'd'=>'đ', 
 'D'=>'Đ',
 'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
 'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ', 
 'i'=>'í|ì|ỉ|ĩ|ị', 
 'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
 'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
 'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 
 'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự', 
 'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
 'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
 'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
 '-'=>'&',
 '-'=>'@',
 '-'=>'!',
 '-' =>'/',
  ); 
 foreach($unicode as $nonUnicode=>$uni)
 {  $arr = explode("|",$uni );
    $str = str_replace($arr,$nonUnicode,$str); }
 return $str;
  } 
     function ChangeTitle($str){
        $str=trim($str);
        //if($str=="")return "";
        $str=str_replace('"', '',$str);
        $str=str_replace("'", '',$str);
        $str = stringUnicode($str);
        $str = mb_convert_case($str,MB_CASE_LOWER,'utf-8');
        $str=str_replace(' ', '-',$str);
        return $str;
     }
     function cate_parent($data,$parent = 0,  $str ="",$select=0){
        foreach ($data as $value) {
            $id= $value["id"];
            $name = $value["name"];
            if($value["parent_id"] == $parent){
                if($select !=0 && $id== $select)
                {
                echo "<option value ='$id' selected='selected'>$str $name</option>";
               }else {
                echo "<option value = '$id'>$str $name</option>";
               }
                cate_parent($data,$id,  $str."--");
            }
        }
    }
     function cate_list($data,$parent = 0,  $str ="  "){
        foreach ($data as $value) {
            $id= $value["id"];
            $name = $value["name"];
            if($value["parent_id"] == $parent){
                echo "<li><a href = '#''>$str $name</a></li>";
                cate_list($data,$id,  $str."   ");
            }
        }
    }

    function sw_get_current_weekday() {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $weekday = date("l");
    $weekday = strtolower($weekday);
    switch($weekday) {
        case 'monday':
            $weekday = 'Thứ hai';
            break;
        case 'tuesday':
            $weekday = 'Thứ ba';
            break;
        case 'wednesday':
            $weekday = 'Thứ tư';
            break;
        case 'thursday':
            $weekday = 'Thứ năm';
            break;
        case 'friday':
            $weekday = 'Thứ sáu';
            break;
        case 'saturday':
            $weekday = 'Thứ bảy';
            break;
        default:
            $weekday = 'Chủ nhật';
            break;
    }
    echo $weekday.', '.date('H:i:s, d/m/Y');
}
     ?>