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
    if ($class == null) {
        $sql = "INSERT INTO `teach`(`url`, `course`, `class`) VALUES ('$url','$course',null)";
        if ($need == null) {
            $sql = "INSERT INTO `teach`(`url`, `course`, `class`) VALUES ('$url','$course',null,null)";
            if ($teacher == null) {
                $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`teacher`) VALUES ('$url','$course',null,null,null)";
            } else {
                $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`need`,`teacher`) VALUES ('$url','$course',null,null,'$teacher')";
            }
        } else {
            $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`need`) VALUES ('$url','$course',null,'$need')";
            if ($teacher == null) {
                $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`teacher`) VALUES ('$url','$course',null,'$need',null)";
            } else {
                $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`need`,`teacher`) VALUES ('$url','$course',null,'$need','$teacher')";
            }
        }
    } else {
        $sql = "INSERT INTO `teach`(`url`, `course`, `class`VALUES ('$url','$course','$class')";
        if ($need == null) {
            $sql = "INSERT INTO `teach`(`url`, `course`, `class`) VALUES ('$url','$course','$class',null)";
            if ($teacher == null) {
                $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`teacher`) VALUES ('$url','$course','$class',null,null)";
            } else {
                $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`need`,`teacher`) VALUES ('$url','$course','$class',null,'$teacher')";
            }
        } else {
            $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`need`) VALUES ('$url','$course','$class','$need')";
            if ($teacher == null) {
                $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`teacher`) VALUES ('$url','$course',,'$class','$need',null)";
            } else {
                $sql = "INSERT INTO `teach`(`url`, `course`, `class`,`need`,`teacher`) VALUES ('$url','$course','$class','$need','$teacher')";
            }
        }
    }
    if(mysqli_query($connect,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=teach.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=teach.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>