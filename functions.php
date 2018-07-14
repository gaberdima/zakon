<?php

function count_child ($parent){
    include ('conn.php');
    $query = mysqli_query($con, "SELECT * FROM sudebnaya_praktika WHERE parent = $parent");
//    var_dump($query->num_rows);
    return $query->num_rows;
}




?>