<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form method="post" action="addproject.php">
    <?php session_start();
    include("db_con_inc.php"); ?>
    <?php $var1 = $_POST["pi"]; ?>
    <input name="cj" type="hidden" value="<?php echo $var1 ?>" />

    項目：<input type="text" name="title"> <br>
    主旨：<input type="text" name="name"> <br>
    學生：<input type="text" name="student"> <br>
    編號：<input type="text" name="number"> <br>
    開始日期：<input type="date" name="timestart" > <br>
    終止日期：<input type="date" name="timeend"> <br>
    金額：<input type="text" name="money"> <br>
    職務：<input type="text" name="job"> <br> <br>
    <input type="submit" name="button" value="確定">
</form>