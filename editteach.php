<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form method="post" action="updateteach.php">
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
    <input name="cj" type="hidden" value="<?php echo $var1 ?>" />

    網址：<input type="text" name="url"> <br>
    課程：<input type="text" name="course"> <br>
    科系：<input type="text" name="class"> <br>
    選、必修：<input type="text" name="need"> <br>
    老師：<input type="text" name="teacher" > <br>
    <input type="submit" name="button" value="確定">
</form>