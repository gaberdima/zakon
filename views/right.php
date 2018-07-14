
<div class="right">
    <div class="sidebar-block">
        <div class="autoriz">
            <?php


                $email_error = '';
                if(!empty($_SESSION['email_error2'])){
                    $email_error = 'Неверный формат email!';
                }
                $password_error = '';
                if(!empty($_SESSION['password_error2'])){
                    $password_error = 'Введите пароль больше 4 символов!';
                }
                $email_check_error = '';
                if(!empty($_SESSION['email_check_error2'])){
                    $email_check_error = 'Такого пользователя не найдено!';
                }
                $password_check_error = '';
                if(!empty($_SESSION['password_check_error2'])){
                    $password_check_error = 'Неверный пароль!';
                }
//                    session_destroy();
                if(!empty($_SESSION['user'])){
                    ?>
                    <form action="exit.php">
                        <button>Выход</button>
                    </form>
                    <?php
                }
                else{ ?>
            <form action="<?php echo $base_url?>autoriz" method="post">
                <input type="email" name="email" class="email" placeholder="email"><span class="error"><?php echo $email_error.' '.$email_check_error?></span>
            <input type="password" name="password" class="password" placeholder="Пароль"><span class="error"><?php echo $password_error.' '.$password_check_error?></span><br>
            <input type="submit" class="send">
            </form>
                    <div class="reg-block">
                        <a href="<?php echo $base_url?>registration" class="reg">Регистрация</a>
                        <a href="#" class="not-pass">Забыли пароль?</a>
                    </div>
              <?php  }
            ?>
        </div>
        <div class="reg-block">

        </div>
    </div>
</div>