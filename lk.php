
<?php
//session_start();
include ('views/header.php');
include ('functions.php');
?>
<div class="content clearfix">
    <?php
    include ('views/left.php');
    ?>
    <div class="center">
        <?php
        include('conn.php');

        $user = $_SESSION['user'];
        $query = mysqli_query($con, "SELECT * FROM `users2` WHERE email = '$user'");
        $query_assoc = mysqli_fetch_assoc($query);
        ?>
        Hello <?php echo $query_assoc['name']?>
        <?php
        $password_error = "";
        if(!empty($_SESSION['password_error'])){
            $password_error = "Вы ввели некоректный пароль!";
        }
        $password_error2 = "";
        if(!empty($_SESSION['password_error2'])){
            $password_error2 = "Пароли не совпадают!";
        }
        $update = "";
        if(!empty($_SESSION['update'])){
                $update = "Ваши данныйе изменины!";
        }






        ?>
        <form action="<?php echo $base_url?>update_lk.php" method="post">
            <div><span>Сменить имя:</span><input type="text" name="name" value="<?php echo $query_assoc['name'];?>"></div>
            <div><span>Сменить пароль:</span><input type="password" name="password1" required></div>
            <div><span>Потвердить новый пароль:</span><input type="password" name="password2"  required></div>
            <div class="error"> <?php echo $password_error.' '.$password_error2?> </div>
            <div class="ok"> <?php echo $update?> </div>
            <button>Сменить</button>
        </form>

    </div>
    <?php
    include ('views/right.php')
    ?>
</div>


<?php
include ('views/footer.php');
?>
