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
    if($student==null){
        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`, `timestart`) VALUES ('$title','$name',null,'$num','$tstart')";
        if($tstart==null){
            $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`) VALUES ('$title','$name',,'$num'null,null)";
            if($tend==null){
                $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`) VALUES ('$title','$name','$num',null,null,null)";
                if($money==null){
                    $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`) VALUES ('$title','$name','$num',null,null,null,null)";
                    if($job==null){
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job` VALUES ('$title','$name','$num',null,null,null,null,null)";
                    }else{
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job` VALUES ('$title','$name','$num',null,null,null,null,'$job')";
                    }
                }else{
                    $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`) VALUES ('$title','$name','$num',null,null,null,'$money')";
                    if($job==null){
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,null,null,'$money',null)";
                    }else{
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,null,null,'$money','$job')";
                    }
                }
            }else{
                $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend` VALUES ('$title','$name','$num',null,null,'$tend')";
                if($money==null){
                    $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money` VALUES ('$title','$name','$num',null,null,'$tend',null)";
                    if($job==null){
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job` VALUES ('$title','$name','$num',null,null,'$tend',null,null)";
                    }else{
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,'money' VALUES ('$title','$name','$num',null,null,'$tend','$job')";
                    }
                }else{
                    $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money` VALUES ('$title','$name','$num',null,null,'$tend','$money')";
                    if($job==null){
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job` VALUES ('$title','$name','$num',null,null,'$tend','$money',null)";
                    }else{
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job` VALUES ('$title','$name','$num',null,null,'$tend','$money','$job')";
                    }
                }
            }
        }else{
            $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart` VALUES ('$title','$name','$num',null,'$tstart')";
            if($tend==null){
                $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`) VALUES ('$title','$name','$num',null,'$tstart',null)";
                if($money==null){
                    $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`) VALUES ('$title','$name','$num',null,'$tstart',null,null)";
                    if($job==null){
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,'$tstart',null,null,null)";
                    }else{
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,'$tstart',null,null,'$sql')";
                    }
                }else{
                    $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`) VALUES ('$title','$name','$num',null,'$tstart',null,'$money')";
                    if($job==null){
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,'$tstart',null,'$money',null)";
                    }else{
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,'$tstart',null,'$money','$job')";
                    }
                }
            }else{
                $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`) VALUES ('$title','$name','$num',null,'$tstart','$tend')";
                if($money!=null){
                    $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`) VALUES ('$title','$name','$num',null,'$tstart','$tend',null)";
                    if($job==null){
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,'$tstart','$tend',null,null)";
                    }else{
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,'$tstart','$tend',null,'$job')";
                    }
                }else{
                    $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`) VALUES ('$title','$name','$num',null,'$tstart','$tend','$money')";
                    if($job==null){
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,'$tstart','$tend','$money',null)";
                    }else{
                        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num',null,'$tstart','$tend','$money','$job')";
                    }
                }
            }
        }
    }else{
        $sql = "INSERT INTO `project`(`jajath`, `name`, `number`,`student`,`timestart`,`timeend`,`money`,`job`) VALUES ('$title','$name','$num','$student','$tstart','$tend','$money','$job')";
    }
    if(mysqli_query($connect,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=project.php>';
    }
    else
    {
        echo '新增失敗!';
        echo ($sql);
//        echo '<meta http-equiv=REFRESH CONTENT=2;url=project.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>