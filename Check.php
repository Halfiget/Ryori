<?php
require_once('dbconnect.php');

$hash = password_hash($password, PASSWORD_DEFAULT);

$sth = $dbh->prepare("SELECT login, email FROM username WHERE login = '$login' or Email = '$email'");
$sth->execute();
$data = $sth->fetchAll(PDO::FETCH_ASSOC);



if ($password != $password_return) {
    // Пароли не совпадают
    header('location: error/error2.php');
} else {

    if (count($data) != 0) {
        // Такой аккаунт уже существует
        header('location: error/error3.php');
    } else {




        $sth = $dbh->prepare("INSERT INTO `username`(`login`, `pass`, `Email`) VALUES ('$login','$hash','$email')");
        $sth->execute(array());

        header('location: Index.php');
    }
}
?>