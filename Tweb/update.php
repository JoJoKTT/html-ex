<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

if($_SESSION['email'] != null)
{
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_SESSION['email'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM `user` where email='$id'";
    $result = mysqli_query($sql);
    $row = mysqli_fetch_row($result);

    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[1]\" />(此項目無法修改) <br>";
    echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
    echo "再一次輸入密碼：<input type=\"passwd\" name=\"pw2\" value=\"$row[2]\" /> <br>";
    echo "電話：<input type=\"text\" name=\"phone\" value=\"$row[6]\" /> <br>";
    echo "中文名：<input type=\"text\" name=\"nameC\" value=\"$row[4]\"/> <br>";
    echo "英文名：<input type=\"text\" name=\"nameE\" value=\"$row[5]\"/> <br> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>