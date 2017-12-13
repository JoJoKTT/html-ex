<?php
include('db_con_inc.php');

$email = $_POST['email'];
<<<<<<< HEAD
$password = hash($_POST['password']);
=======
$password =hash("sha256", $_POST['password']);

$sql = "SELECT * FROM member_table where username = '$id'";
$result = mysqli_query($sql);
$row = @mysqli_fetch_row($result);
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['username'] = $id;
    echo '登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index1.php>';
}
else
{
    echo '登入失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
}
?>
>>>>>>> a5a43951549e3802db4d677e921deddb0be2f355
