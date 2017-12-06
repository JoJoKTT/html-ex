<?php
$link = mysqli_connect("localhost","104021046","#Toh8ohf+","104021046");

if(!$link){
    echo "Error : Unable to connect.", PHP_EOL;
    exit;
}

$link->set_charset("utf8");
?>