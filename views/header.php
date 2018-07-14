<?php
    include ('conn.php');
    $base_url = 'http://localhost/project15/';
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo $base_url ?>style.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>Font-Awesome-master/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper clearfix">
    <div class="header">
        <div class="image-block">

        </div>
       <div class="nav clearfix">
           <div class="block-menu">
               <ul class="menu">
                   <li><a href="#"><i class="fa fa-home home" aria-hidden="true"></i></a></li>
               <?php
               $menu = mysqli_query($con, "SELECT * FROM struct");

               while($menu_assoc = mysqli_fetch_assoc($menu)){
                   ?>
                   <li><a href="#"><?php echo $menu_assoc['title']; ?></a></li>

               <?php }
               ?>
                   <?php
                    if(!empty($_SESSION['user'])){
                        ?>
                   <li><a href="<?php echo $base_url?>lk">Личный кабинет</a></li>
                   <?php
                   }
                   ?>



<!--                   <li><a href="#">Законодательство</a></li>-->
<!--                   <li><a href="#">Договоры</a></li>-->
<!--                   <li><a href="#">Судебная практика</a></li>-->
<!--                   <li><a href="#">Публикации</a></li>-->
               </ul>
           </div>
           <div class="search">
               <form action="<?php echo $base_url?>search" method="get">
                   <input type="text" name="name" placeholder="Поиск по сайту">
                   <input type="submit" value=">>" title="Поиск">
               </form>
           </div>
       </div>
    </div>