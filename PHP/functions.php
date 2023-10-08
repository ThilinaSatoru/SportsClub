<?php 
require_once("connection.php");


function getEquipments() {
    global $con;

    $query ="SELECT name FROM equipment";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($con);
        return $options;
    } else {
        return null;
    }
}


?>