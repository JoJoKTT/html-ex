<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form method="post" action="addbook.php">
    <?php session_start();
    include("db_con_inc.php"); ?>
    <?php $var1 = $_POST["pi"]; ?>
    <input name="cj" type="hidden" value="<?php echo $var1 ?>" />

    書名：<input type="text" name="name"> <br>
    作者：<input type="text" name="author"> <br>
    種類：<input type="text" name="kind"> <br>
    編號：<input type="text" name="num"> <br>
    DOI：<input type="text" name="doi" > <br>
    頁數：<input type="text" name="page" > <br>
    次數：<input type="text" name="time" > <br>
    特案：<input type="text" name="sissue" > <br>
    時間：<input type="text" name="date" > <br>
    <input type="submit" name="button" value="確定">
</form>