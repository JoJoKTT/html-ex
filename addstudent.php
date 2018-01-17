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

        if ($essaytopic == null) {
            $sql = "INSERT INTO `student`(`year`, `course`, `name`) VALUES ('$year','$course','$name',null)";
            if ($other == null) {
                $sql = "INSERT INTO `student`(`year`, `course`, `name`,`other`) VALUES ('$year','$course','$name',null,null)";
            } else {
                $sql = "INSERT INTO `student`(`year`, `course`, `name`,`essaytopic`,`other`) VALUES ('$year','$course','$name',null,'$other')";
            }
        } else {
            $sql = "INSERT INTO `student`(`year`, `course`, `name`,`essaytopic`) VALUES ('$year','$course','$name','$essaytopic')";
            if ($other == null) {
                $sql = "INSERT INTO `student`(`year`, `course`, `name`,`other`) VALUES ('$year','$course','$name','$essaytopic',null)";
            } else {
                $sql = "INSERT INTO `student`(`year`, `course`, `name`,`essaytopic`,`other`) VALUES ('$year','$course','$name','$essaytopic','$other')";
            }
        }
    if(mysqli_query($connect,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=student.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=student.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>