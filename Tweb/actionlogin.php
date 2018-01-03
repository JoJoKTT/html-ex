<?php session_start(); ?>
    <!--上方語法為啟用session，此語法要放在網頁最前方-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
<<<<<<< HEAD
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("db_con_inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];

//搜尋資料庫資料
$sql = "SELECT * FROM `user` where email = '$id'";
$result = mysqli_query($connect,$sql);
$row = @mysqli_fetch_row($result);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == sha1($pw))
{
    //將帳號寫入session，方便驗證使用者身份
    $_SESSION['email'] = $id;
    echo '登入成功!';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index1.php>';
=======
require('db_con_inc.php');

$email = $_POST['email'];
$password = sha1($_POST['password']);
$refer = $_POST['refer'];

if ($email == '' || $password == '')
{
    // No login information
    header('Location: login.php?refer='. urlencode($_POST['refer']));
>>>>>>> 48441b2b65fc473a73eabbf3fa36180f90d91a63
}
else
{
    // Authenticate user
    $con = mysqli_connect($db_host, $db_user, $db_pass);
    mysqli_select_db($db_name, $con);

    $query = "SELECT userid, sha1(UNIX_TIMESTAMP() + userid + RAND(UNIX_TIMESTAMP()))
        guid FROM susers WHERE email = '$email' AND password = password('$password')";

    $result = mysqli_query($query, $con)
    or die ('Error in query');

    if (mysqli_num_rows($result))
    {
        $row = mysqli_fetch_row($result);
        // Update the user record
        $query = "UPDATE susers SET guid = '$row[1]' WHERE userid = $row[0]";

        mysqli_query($query, $con)
        or die('Error in query');

        // Set the cookie and redirect
        // setcookie( string name [, string value [, int expire [, string path
        // [, string domain [, bool secure]]]]])
        // Setting cookie expire date, 6 hours from now
        $cookieexpiry = (time() + 21600);
        setcookie("session_id", $row[1], $cookieexpiry);

        if (empty($refer) || !$refer)
        {
            $refer = 'index.php';
        }

        header('Location: '. $refer);
    }
    else
    {
        // Not authenticated
        header('Location: login.php?refer='. urlencode($refer));
    }
}
<<<<<<< HEAD
?>
=======

?>
>>>>>>> 48441b2b65fc473a73eabbf3fa36180f90d91a63
