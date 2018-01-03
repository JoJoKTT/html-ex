<?php
<<<<<<< HEAD
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

=======
//$link = mysqli_connect("localhost","104021046","#Toh8ohf+","104021046");

$db_host = 'localhost';
$db_user = '104021046';
$db_pass = '#Toh8ohf+';
$db_name = '104021046';

$link->set_charset("utf8");
>>>>>>> 48441b2b65fc473a73eabbf3fa36180f90d91a63
?>