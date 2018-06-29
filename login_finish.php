<!DOCTYPE html>
<html>
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
$sql = "SELECT * FROM user where user = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        $_SESSION['name'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=donate.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=3;url=login.php>';
}
?>
</html>