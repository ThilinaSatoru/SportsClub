<?php 
include("connection.php");


function getEquipments() {
    global $con;

    $query ="SELECT name FROM equipment";
    $result = $con->query($query);
    if($result->num_rows> 0){
        $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $options;
    }
    mysqli_close($con);	
}


?>