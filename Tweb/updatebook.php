<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_con_inc.php");
$kk=$_POST['cj'];
$name=$_POST['name'];
$author = $_POST['author'];
$kind = $_POST['kind'];
$num = $_POST['num'];
$doi = $_POST['doi'];
$page = $_POST['page'];
$time = $_POST['time'];
$sissue = $_POST['sissue'];
$date = $_POST['date'];


//紅色字體為判斷密碼是否填寫正確
if($_SESSION['email'] != null)
{
    $id = $_SESSION['email'];
    //更新資料庫資料語法
    if($name!=null){
        $sql = "UPDATE book SET name='$name' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if ($author!=null){
        $sql = "UPDATE book SET `author`='$author' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($kind!=null){
        $sql = "UPDATE book SET kind='$kind' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($num!=null){
        $sql = "UPDATE book SET `num`='$num' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($doi!=null){
        $sql = "UPDATE book SET doi='$doi' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($page!=null){
    $sql = "UPDATE book SET page='$page' WHERE id='$kk'";
    mysqli_query($connect,$sql);
}if($time!=null){
    $sql = "UPDATE book SET time='$time' WHERE id='$kk'";
    mysqli_query($connect,$sql);
}if($sissue!=null){
    $sql = "UPDATE book SET sissue='$sissue' WHERE id='$kk'";
    mysqli_query($connect,$sql);
}if($date!=null){
    $sql = "UPDATE book SET date='$date' WHERE id='$kk'";
    mysqli_query($connect,$sql);
}
    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=book.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=book.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>