<?php
    include ('conn.php');
    include ('functions.php');


if(!empty($_GET['p'])){
    $p_Page = $_GET['p'];


    $query_content = mysqli_query($con, "SELECT * FROM sudebnaya_praktika WHERE url='$p_Page'");
//            var_dump($query_content);
    $query_content_assoc = mysqli_fetch_assoc($query_content);

    if($p_Page == $query_content_assoc['url']){
//        echo $query_content_assoc['content'];
    }
    else{
        header("location: $base_url"."404");
    }

}


else if(!empty($_GET['z'])) {
    $z_Page = $_GET['z'];
    if($z_Page == 'autoriz'){

    }

    $query_z_content = mysqli_query($con, "SELECT * FROM blocks_ttitles WHERE url='$z_Page'");
    $query_z_content_assoc = mysqli_fetch_assoc($query_z_content);

    if ($z_Page == $query_z_content_assoc['url']) {
//        echo $query_z_content_assoc['content'];
    } else {
        header("location: $base_url"."404");
    }

}



?>
<div class="content clearfix">
    <?php
        include ('left.php');
        include ('right.php');
    ?>

    <div class="center">

        <?php
            if(!empty($_GET['p'])){
                $p_Page = $_GET['p'];


                $query_content = mysqli_query($con, "SELECT * FROM sudebnaya_praktika WHERE url='$p_Page'");
//            var_dump($query_content);
                $query_content_assoc = mysqli_fetch_assoc($query_content);

                if($p_Page == $query_content_assoc['url']){
                    echo $query_content_assoc['content'];
                }
                else{
                    echo  "<h1>URL не найден!</h1>";
                }

            }


            else if(!empty($_GET['z'])){
                $z_Page = $_GET['z'];

                $query_z_content = mysqli_query($con, "SELECT * FROM blocks_ttitles WHERE url='$z_Page'");
                $query_z_content_assoc = mysqli_fetch_assoc($query_z_content);

                if($z_Page == $query_z_content_assoc['url']){
                    echo $query_z_content_assoc['content'];
                }
                else{
                    echo  "<h1>URL не найден!</h1>";
                }


//                берем переменную $z_Page, делаем запрос в табл categories, где находи ее id.
//                с етим id делаем запрос в табл sudebnaya_praktika и находим всех потомков етой категории.
//                выводи на екран етих потомков.


                $query_categories = mysqli_query($con,"SELECT * FROM categories WHERE url = '$z_Page'");
                $query_categories_assoc = mysqli_fetch_assoc($query_categories);
                $caegories_id = $query_categories_assoc['id'];



                $query_sudebnaya_praktika = mysqli_query($con, "SELECT * FROM sudebnaya_praktika WHERE parent = '$caegories_id'");
                ?>
                <ul>
                    <?php
                while($query_sudebnaya_praktika_assoc = mysqli_fetch_assoc($query_sudebnaya_praktika)){
                    ?>
                    <li><a href="<?php echo $base_url ?>page/<?php echo $query_sudebnaya_praktika_assoc['url'] ?>"><?php echo $query_sudebnaya_praktika_assoc['title'] ?> </a></li>
                <?php
                }
                ?>
                </ul>
                <?php









            }




        ?>

    </div>
</div>