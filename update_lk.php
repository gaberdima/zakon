<?php
session_start();
//var_dump();
include('conn.php');
//var_dump($_POST);
$user = $_SESSION['user'];
$name = $_POST['name'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$_SESSION['update'] = 0;

if(preg_match("/^[a-z0-9_\.-]{4,}$/i", $_POST['password1'])) {
    $_SESSION['password_error'] = 0;

    if ($password1 == $password2) {
        $_SESSION['password_error2'] = 0;
        $_SESSION['update'] = 1;
        $pass = md5($password1);
//        echo "UPDATE `users2` SET `name`='$name',`password`='$password1' WHERE email = '$user'";
        $update = mysqli_query($con, "UPDATE `users2` SET `name`='$name',`password`='$pass' WHERE email = '$user' ");
        header("Location: lk");

    } else {
        $_SESSION['password_error2'] = 1;
        header("Location:lk");
    }
}
else{
    $_SESSION['password_error'] = 1;
    header("Location:lk");

}
?>