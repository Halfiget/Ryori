<?php
session_start();
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_return = $_POST['password_return'];




$dsn = 'mysql:dbname=userbd;host=localhost'; $user = 'root'; $pass = 'root';
$dbh = null; $sth = null; $query = '';

$dbh = new PDO(
    $dsn,
    $user,
    $pass,
    array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'" )
);
$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );