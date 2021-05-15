<?php
require_once('dbconnect.php');

$hash = password_hash($password, PASSWORD_DEFAULT);

$sth = $connect->prepare("SELECT login, email FROM username WHERE login = '$login' or email = '$email'");
$sth->execute();
$data = $sth->fetchAll(PDO::FETCH_ASSOC);



if ($password != $password_repeat) {
    // Пароли не совпадают
    // header('location: error/error2.php');
    echo "pass";
} else {

    if (count($data) != 0) {
        // Такой аккаунт уже существует
        // header('location: error/error3.php');
        echo "login";
    } else {




        $sth = $connect->prepare("INSERT INTO `username`(`login`, `pass`, `email`) VALUES ('$login','$hash','$email')");
        $sth->execute(array());

        header('Location: ../index.php');
    }
}
?>