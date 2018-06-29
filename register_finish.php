<!DOCTYPE html>
<html>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
$user = $_POST['user'];
$passwd = $_POST['passwd'];
if($user != null && $passwd != null){
	$sql = "INSERT INTO user (user, passwd)
	VALUES ('$user','$passwd')";
	$result = mysql_query($sql);
	$row = @mysql_fetch_row($result);
	echo '註冊成功!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}else{
	echo '註冊失敗!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=register.php>';
}
?>
</html>