<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php session_start();
    include("db_con_inc.php");
    if($_SESSION['email'] != null)
    {
        $id = $_SESSION['email'];}
    else
    {
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
    }
    $var1 = $_POST["pi"]; ?>

    <form name="form" method="post" action="register_finish.php">
    帳號：<input type="text" name="id" /> <br>
    密碼：<input type="password" name="pw" /> <br>
    再一次輸入密碼：<input type="password" name="pw2" /> <br>
    中文名：<input type="text" name="nameC" /> <br>
    英文名：<input type="text" name="nameE" /> <br>
    電話：<input type="text" name="phone" /> <br>
    <input type="submit" name="button" value="確定" />
</form>