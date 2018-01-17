<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_con_inc.php");
$kk=$_POST['cj'];
$url=$_POST['url'];
$course = $_POST['course'];
$class = $_POST['class'];
$need = $_POST['need'];
$teacher = $_POST['teacher'];



//紅色字體為判斷密碼是否填寫正確
if($_SESSION['email'] != null)
{
    $id = $_SESSION['email'];
    //更新資料庫資料語法
    if($url!=null){
        $sql = "UPDATE teach SET url='$url' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if ($course!=null){
        $sql = "UPDATE teach SET `course`='$course' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($class!=null){
        $sql = "UPDATE teach SET class='$class' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($need!=null){
        $sql = "UPDATE teach SET `need`='$need' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }if($teacher!=null){
        $sql = "UPDATE teach SET teacher='$teacher' WHERE id='$kk'";
        mysqli_query($connect,$sql);
    }
    if(mysqli_query($connect,$sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=teach.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=teach.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>