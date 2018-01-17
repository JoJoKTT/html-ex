<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form method="post" action="addstudent.php">
    <?php session_start();
    include("db_con_inc.php"); ?>
    <?php $var1 = $_POST["pi"]; ?>
    <input name="cj" type="hidden" value="<?php echo $var1 ?>" />

    學年度：<input type="text" name="year"> <br>
    科系：<input type="text" name="course"> <br>
    姓名：<input type="text" name="name"> <br>
    論文題目：<input type="text" name="essaytopic"> <br>
    備註：<input type="text" name="other" > <br>
    <input type="submit" name="button" value="確定">
</form>