<?php
session_start();
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['pass'];
$password_repeat = $_POST['pass_repeat'];




$dsn = 'mysql:dbname=disk; host=localhost'; $user = 'root'; $pass = 'root';
$connect = null; $sth = null; $query = '';

$connect = new PDO(
    $dsn,
    $user,
    $pass,
    array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'" )
);
$connect->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
?>