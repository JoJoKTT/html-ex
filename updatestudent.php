<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_con_inc.php");
$kk=$_POST['cj'];
$year=$_POST['year'];
$course = $_POST['course'];
$name = $_POST['name'];
$essaytopic = $_POST['essaytopic'];
$other = $_POST['other'];



//紅色字體為判斷密碼是否填寫正確
if($_SESSION['email'] != null)
{
    $id = $_SESSION['email'];
    //更新資料庫資料語法
    if($year!=null){
        $sql = "UPDATE student SET year='$year' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if ($course!=null){
        $sql = "UPDATE student SET `course`='$course' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($name!=null){
        $sql = "UPDATE student SET name='$name' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($essaytopic!=null){
        $sql = "UPDATE student SET `essaytopic`='$essaytopic' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($other!=null){
        $sql = "UPDATE student SET other='$other' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }
    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=student.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=student.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>