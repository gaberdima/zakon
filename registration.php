<?php
include ('views/header.php');
include ('functions.php');
//session_start();
?>
<div class="content clearfix">
    <?php
    include ('views/left.php');
    ?>
    <div class="center">
        <?php
             $email_error = '';
        if(!empty($_SESSION['email_error'])){
            $email_error = 'Неверный формат email!';
        }
        $password_error = '';
        if(!empty($_SESSION['password_error'])){
            $password_error = 'Введите пароль больше 4 символов!';
        }
        $email_check_error = '';
        if(!empty($_SESSION['email_check_error'])){
            $email_check_error = 'Такой пользователь уже есть!';
        }

        ?>
        <form action="<?php echo $base_url?>test.php" method="post" class="reg">
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email"> <span class="error"><?php echo $email_error.' '.$email_check_error; ?></span>
            <input type="password" name="password" placeholder="password"> <span class="error"><?php echo $password_error; ?></span><br>
            <button>Отправить</button>
        </form>





    </div>
    <?php
    include ('views/right.php')
    ?>
</div>


<?php
include ('views/footer.php');
?>
