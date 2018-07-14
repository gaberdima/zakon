
        <?php

        session_start();

        include('conn.php');

        //var_dump($_POST);
        $name = $_POST['name'];
        if(!empty($_POST['email']) && preg_match("/^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i", $_POST['email'])) {
            $email = $_POST['email'];
            $_SESSION['email_error'] = 0;

            if(!empty($_POST['password']) && preg_match("/^[a-z0-9_\.-]{4,}$/i", $_POST['password'])) {
                $password = $_POST['password'];
                $password_md = md5($password);
                $_SESSION['password_error'] = 0;

                $email_query = mysqli_query($con, "SELECT * FROM `users2` where email = '$email'");


                if(empty($email_query->num_rows)) {

                    $query_insert = mysqli_query($con, "INSERT INTO `users2`(`name`, `password`, `role`, `email`) VALUES ('$name', '$password_md', 3, '$email')");

                    $_SESSION['email_check_error'] = 0;
                    $_SESSION['user'] = $email;
                    header("Location:lk.php");
                }
                else{
                    $_SESSION['email_check_error'] = 1;
                    header("Location: registration");
                }
            }
            else{
                $_SESSION['password_error'] = 1;
                header("Location: registration");
            }
        }
        else{
            $_SESSION['email_error'] = 1;
            header("Location: registration");
        }
        ?>


