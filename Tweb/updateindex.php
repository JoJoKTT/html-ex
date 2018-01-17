<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_con_inc.php");
$name = $_POST['name'];
$school = $_POST['school'];
$dept = $_POST['dept'];
$jobt = $_POST['jobt'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$web = $_POST['web'];


//紅色字體為判斷密碼是否填寫正確
if($_SESSION['email'] != null)
{
    $id = $_SESSION['email'];
    //更新資料庫資料語法
    $sql = "UPDATE `professor` SET `name`='$name',`school`='$school',`dept`='$dept',`jobt`='$jobt',`phone`='$phone',`fax`='$fax',`email`='$email',`web`='$web' WHERE id='1'";
    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>