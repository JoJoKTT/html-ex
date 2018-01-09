<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
<<<<<<< HEAD
include("db_con_inc.php");
=======
include("mysql_connect.inc.php");
>>>>>>> 27c9dc740caa7431799c5802f2f9da5f08ffa4b6

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
<<<<<<< HEAD
$phone = $_POST['phone'];
$nameC = $_POST['nameC'];
$nameE = $_POST['nameE'];

//紅色字體為判斷密碼是否填寫正確
if($_SESSION['email'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    $id = $_SESSION['email'];

    //更新資料庫資料語法
    $sql = "update `user` set passwd=$pw, phone=$phone, nameC=$nameC, nameE=$nameE where id='$id'";
    if(mysqli_query($sql))
=======
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$other = $_POST['other'];

//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    $id = $_SESSION['username'];

    //更新資料庫資料語法
    $sql = "update member_table set password=$pw, telephone=$telephone, address=$address, other=$other where username='$id'";
    if(mysql_query($sql))
>>>>>>> 27c9dc740caa7431799c5802f2f9da5f08ffa4b6
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
<<<<<<< HEAD
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
=======
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
>>>>>>> 27c9dc740caa7431799c5802f2f9da5f08ffa4b6
}
?>