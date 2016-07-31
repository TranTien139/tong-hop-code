<?php 
session_start();
$errors = '';

if(isset($_POST['submit']))
{
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		require_once('connection.php');
		$name=$_POST['name'];
		$content=$_POST['content'];
		$commentid=$_POST['commentid'];
		$images='http://www.gravatar.com/avatar.php';
		mysql_query("INSERT INTO comment(name, content, images, comsubid)VALUES('$name', '$content', '$images', '$commentid')");
	}
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Captcha</title>
<style>
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
ul
{
padding:0;
margin: 0 0 0 13px;
padding: 0;
}
#commentcontainer
{
	height:auto;
	width:600px;
	margin:0 auto;
}
#commentcontainer img
{
float:left;
border:1px solid #eeeeee;
padding:5px;
margin:0 12px 12px 0;
}
.clearfix
{
clear:both;
}
p
{
margin:0;
padding:2px;
}
#subcomm img
{
height:auto;
max-width:40px;
float:left;
border:1px solid #eeeeee;
padding:5px;
margin:5px 5px 5px 5px;
}
#subcomm
{
float:right;
height:auto;
width:497px;
background-color:#EDEFF4;
border-bottom:1px solid white;
}
#maincomm
{
border-bottom:1px solid gray;
padding-bottom:5px;
margin-bottom:10px;
}
#name
{
font-weight: bold;
color: #3B5998;
text-transform:capitalize;
}
#comm a
{
	text-decoration:none;
	color:#3b5998;
}
#comm a:hover
{
	text-decoration:underline;
}
</style>	
	
</head>

<body>

<div id="commentcontainer">
<?php
require_once('connection.php');
$result3 = mysql_query("SELECT * FROM comment where comsubid=0");
while($row3 = mysql_fetch_array($result3))
{ 
	$id=$row3['commentid'];
	echo '<div id="maincomm">';
	echo '<img src="'.$row3['images'].'">';
    echo '<p id="name">'.$row3['name'].'</p>';
	echo '<p>'.$row3['content'].'</p>';
	echo '<p id="comm">'.'<a href="index.php?id='.$id.'&#link1">comment</a>'.'</p>';
	
		$result4 = mysql_query("SELECT * FROM comment where comsubid='$id'");
			while($row4 = mysql_fetch_array($result4))
			{
				echo '<div id="subcomm">';
				echo '<img src="'.$row4['images'].'">';
				echo '<p id="name">'.$row4['name'].'</p>';
				echo '<p>'.$row4['content'].'</p>';
				echo '<div class="clearfix"></div>';
				echo '</div>';
			}
	echo '<div class="clearfix"></div>';
	echo '</div>';
}
?>
<div class="clearfix"></div>
</div>


<a id="link1">
<form method="POST" name="" 
action="index.php"> 
<table width="332" border="0" align="center">
  <tr>
    <td width="265">
		<ul>
		<?php
		if(!empty($errors)){
		echo "<li class='err'>".($errors)."</li>";
		}
		?>
		</ul>	</td>
    <td width="57">&nbsp;</td>
  </tr>
   <tr>
    <td colspan="2">
		Name:<br>
		<input name="commentid" type="hidden" value="<?php echo $_GET['id'] ?>">
		<input name="name" type="text"><br>
		Content:<br>
		<textarea name="content" style="width: 316px;"></textarea>
	</td>
   </tr>
  <tr>
  <tr>
    <td> <img src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='captchaimg' > </td>
    <td> <a href='javascript: refreshCaptcha();'><img src="refresh.png"></a> </td>
  </tr>
  <tr>
    <td colspan="2">Enter the code above here :
      <input id="6_letters_code" name="6_letters_code" type="text"></td>
    </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Submit" name='submit'></td>
    </tr>
</table>
</form>
</a>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</body>
</html>