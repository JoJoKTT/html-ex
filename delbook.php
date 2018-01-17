<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_con_inc.php");
$var1 = $_POST["pi"];
if($_SESSION['email'] != null)
{
    $id = $_SESSION['email'];
    //更新資料庫資料語法
    $sql = "DELETE FROM `book` WHERE `book`.`id` = '$var1'";
    if(mysqli_query($connect,$sql))
    {
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=book.php>';
    }
    else
    {
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=book.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>