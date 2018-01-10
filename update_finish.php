<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_con_inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$phone = $_POST['phone'];
$nameC = $_POST['nameC'];
$nameE = $_POST['nameE'];
//紅色字體為判斷密碼是否填寫正確

//更新資料庫資料語法
$sql = "update `user` set passwd=$pw, nameC=$nameC, nameE=$nameE, phone=$phone where email='$id'";
if(mysqli_query($connect,$sql))
{
    echo '修改成功!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
}
else
{
    echo '修改失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
}
?>