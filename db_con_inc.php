<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/12/27
 * Time: 下午 02:41
 */
$db_server = "localhost";
//資料庫名稱
$db_name = "104021046";
//資料庫管理者帳號
$db_user = "104021046";
//資料庫管理者密碼
$db_passwd = "#Toh8ohf+";

//對資料庫連線
$connect = @mysqli_connect($db_server, $db_user, $db_passwd,$db_name);

mysqli_set_charset($connect,'utf8');

?>