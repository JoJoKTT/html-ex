<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_con_inc.php");
$kk=$_POST['cj'];
$title=$_POST['title'];
$name = $_POST['name'];
$student = $_POST['student'];
$num = $_POST['number'];
$tstart = $_POST['timestart'];
$tend = $_POST['timeend'];
$money = $_POST['money'];
$job = $_POST['job'];


//紅色字體為判斷密碼是否填寫正確
if($_SESSION['email'] != null)
{
    $id = $_SESSION['email'];
    //更新資料庫資料語法
    if($title!=null){
        $sql = "UPDATE project SET jajath='$title' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if ($name!=null){
        $sql = "UPDATE project SET `name`='$name' WHERE id='$kk'";
    mysqli_query($connect,$sql);
    }if($student!=null){
        $sql = "UPDATE project SET student='$student' WHERE id='$kk'";
    mysqli_query($connect,$sql);
    }if($num!=null){
        $sql = "UPDATE project SET `number`='$num' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($tstart!=null){
        $sql = "UPDATE project SET timestart='$tstart' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($tend!=null){
        $sql = "UPDATE project SET timeend='$tend' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($money!=null){
        $sql = "UPDATE project SET money='$money' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($job!=null){
        $sql = "UPDATE project SET `job`='$job' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }
    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=project.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=project.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>