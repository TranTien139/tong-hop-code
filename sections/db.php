<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "demo";
$conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);
  if($conn->connect_error){
  	die("lỗi kết nối: " . $conn->connect_error);
  }
?>