<?php
include "db.php";
if($_POST['id'])
{
$id = $_POST['id'];
$sql = mysqli_query($conn,"SELECT*FROM data_parent WHERE parent='$id'");

while($row = mysqli_fetch_array($sql))
{
$id1=$row['did'];
$sql1 = mysqli_query($conn,"SELECT*FROM data WHERE id='$id1'");
$row = mysqli_fetch_array($sql1);
$data=$row['data'];
echo '<option value="'.$id1.'">'.$data.'</option>';
}
}
?>