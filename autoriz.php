<?php
    session_start();
    include('conn.php');


if(!empty($_POST['email']) && preg_match("/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i", $_POST['email'])){
    $email = $_POST['email'];
    $_SESSION['email_error2'] = 0;
    if(!empty($_POST['password']) && preg_match("/^[a-z0-9_\.-]{4,}$/i", $_POST['password'])){

        $password = $_POST['password'];
        $_SESSION['password_error2'] = 0;

        $query = mysqli_query($con, "SELECT * FROM `users2` where email = '$email'");

        if(!empty($query->num_rows)){
            $query_assoc = mysqli_fetch_assoc($query);
            $password_md = md5($password);
            $_SESSION['email_check_error2'] = 0;

            if($query_assoc['password'] == $password_md){
                $_SESSION['user'] = $email;
                header("Location: lk");
                $_SESSION['password_check_error2'] = 0;
            }
            else{
                header("Location: http://localhost/project15/");
                $_SESSION['password_check_error2'] = 1;
            }

        }
        else{
            header("Location: http://localhost/project15/");
            $_SESSION['email_check_error2'] = 1;
        }
    }
    else{
        header("Location: http://localhost/project15/");
        $_SESSION['password_error2'] = 1;
    }
}
else{
    header("Location: http://localhost/project15/");
    $_SESSION['email_error2'] = 1;
}

?>