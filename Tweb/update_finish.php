<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_con_inc.php");
mysqli_query($connect, 'SET CHARACTER SET utf8');
mysqli_query($connect, "SET collation_connection = 'utf8_general_ci'");
$id = $_POST['id'];
$pw = sha1($_POST['pw']);
$pw2 = sha1($_POST['pw2']);
$phone = $_POST['phone'];
$nameC = $_POST['nameC'];
$nameE = $_POST['nameE'];


//紅色字體為判斷密碼是否填寫正確
if($_SESSION['email'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
    $id = $_SESSION['email'];
    //更新資料庫資料語法
    $sql = "UPDATE `user` SET passwd='$pw',phone='$phone',nameC='$nameC',nameE='$nameE' where email='$id'";
    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
    else
    {
        echo '修改失敗!';
        echo ($sql);
        //        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>