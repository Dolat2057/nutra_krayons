<?php
//include("config/config.inc.php");
function getSingleArray($query){
    global $conn;
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    return $result;
    //$_SESSION["P_ID"] = $product_id;
    
}


function getAllResult($query){
    global $conn;
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    return $result;
    //$_SESSION["P_ID"] = $product_id;
}
?>