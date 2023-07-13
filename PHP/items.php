<?php 
include("connection.php");
include("functions.php");



if (isset($_POST['request'])) {

	$r_name = $_POST['name'];
    $r_email = $_POST['email'];
    $r_university = $_POST['university'];
    $r_batch = $_POST['batch'];
    $r_equipment = $_POST['equipment'];
    $r_description = $_POST['description'];

    $r_date = $_POST['date'];
    $r_time = $_POST['time'];
    $r_combinedDT = date('Y-m-d H:i:s', strtotime("$r_date $r_time"));
	
    request($r_name, $r_email, $r_university, $r_batch, $r_equipment, $r_description, $r_combinedDT);
}


function request($name, $email, $university, $batch, $equipment, $description, $combinedDT) {
	global $con;

    $equip = "SELECT * FROM equipment WHERE name = '$equipment' LIMIT 1";
    $q_id = $con->query($equip);

    if ($q_id->num_rows > 0) {
        while($row = $q_id->fetch_assoc()) {
            echo "id: " . $row['Id']. "<br>";

            $e_id = $row['Id'];

            $query = "INSERT INTO equipment_request (name, email, university, batch, equipment, description, date) 
                VALUES('$name', '$email', '$university', '$batch', $e_id, '$description', '$combinedDT')";

            if(!mysqli_query($con, $query)) {
                echo("Error description: " . $con -> error);
            } else {
                exit(header('location: ../SportItems.php'));
            }
        }
    }
    mysqli_close($con);	
}


?>