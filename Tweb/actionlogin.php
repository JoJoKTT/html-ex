<?php
include('db_con_inc.php');

$email = $_POST['email'];
$password = hash($_POST['password']);
