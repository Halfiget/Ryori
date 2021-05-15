<?php
require_once('dbconnect.php');


$result = $dbh->prepare("SELECT * FROM username WHERE Email = '$email'");
$result->execute();
foreach ($result as $row) {
    $hash = $row['pass'];
    $role = $row['role'];
}




if (password_verify($password, $hash)) {
    $_SESSION['auth'] = true;
    $_SESSION['logged_user'] = $user;
    $_SESSION['role'] = $role;
    header('location: Index.php');
} else {

    header('location: error/error.php');
}
?>