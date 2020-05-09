<?php
$db_name = "davy_admin";
$db_host = "localhost";
$db_user = "root";
$db_password = "";

$db_mysql = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

$pdo = new PDO($db_mysql, $db_user, $db_password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
?>