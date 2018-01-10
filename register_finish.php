<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_con_inc.php");

$id = $_POST['id'];
$pw = sha1($_POST['pw']);
$pw2 = sha1($_POST['pw2']);
$nameC = $_POST['nameC'];
$nameE = $_POST['nameE'];

$phone = $_POST['phone'];
//$other = $_POST['other'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if ( $row[1] == $id)
{
    echo '帳號重複，請洽管理員';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}

//新增資料進資料庫語法

$sql = "insert into `user` (email, passwd,guid,nameC,nameE, telephone) values ('$id','$pw',null,'$nameC', '$nameE', '$phone')";

if(mysqli_query($connect,$sql))
{
    echo '新增成功!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
}
else
{
    echo '新增失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index1.php>';
}

?>