<?php
require_once('dbconnect.php');


$result = $connect->prepare("SELECT * FROM username WHERE login = '$login'");
$result->execute();
foreach ($result as $row) {
    $hash = $row['pass'];
    
}



if (password_verify($password, $hash)) {
    $_SESSION['auth'] = true;
    $_SESSION['logged_user'] = $user;
    header('Location: ../index.php');
} else {

    // header('location: error/error.php');
    echo "Введеные данные не верны";
}
?>