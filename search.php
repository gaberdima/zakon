<?php
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


        $search = $_GET['name'];
        if(!empty($search)) {
            $query = mysqli_query($con, "SELECT * from sudebnaya_praktika where title like '%$search%' or content like '%$search%'");
            $query_assoc = mysqli_fetch_assoc($query);


            $query2 = mysqli_query($con, "SELECT * from blocks_ttitles where title like '%$search%' or content like '%$search%'");
            $query_assoc2 = mysqli_fetch_assoc($query2);

            if (!empty($query_assoc) || !empty($query_assoc2)) {

                echo $query_assoc['title'] . '<br>';
                echo $query_assoc['content'] . '<br>';


                echo $query_assoc2['title'] . '<br>';
                echo $query_assoc2['content'] . '<br>';
            } else {
                echo "Увы ничего не найдено";
            }
        }
        else{
            echo "В поле поиска введите текст для запроса...";
        }
        ?>
    </div>
    <?php
    include ('views/right.php')
    ?>
</div>


<?php
include ('views/footer.php');
?>
