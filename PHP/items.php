<?php 
include("connection.php");
include("functions.php");

$errors = [];

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


function validate_items($name, $email, $university, $batch, $equipment, $description, $combinedDT)
{

    if (!preg_match('/^[A-Z]{6}\d{3}[A-Z]$/', $batch)) {
        $errors["batch"] = "Does not match the format GAHDSE211F";
    }

    if (!preg_match('/^[A-Za-z\s]+$/', $name)) {
        $errors["name"] = "Must NOT contain numbers or special characters.";
    }

    /////// If there are validation errors, display them //////////////////////////////////////////////
    if (!empty($errors)) {
        foreach ($errors as $field => $error) {
            echo "<script>";
            echo "alert('" . strtoupper($field) . " : " . $error . "');";
            echo "</script>";
        }
        return false;
    } else {
        return true;
    }
}

function request($name, $email, $university, $batch, $equipment, $description, $combinedDT)
{
    global $con;
    global $errors;

    if (validate_items($name, $email, $university, $batch, $equipment, $description, $combinedDT)) {
        $equip = "SELECT * FROM equipment WHERE name = '$equipment' LIMIT 1";
        $q_id = $con->query($equip);

        if ($q_id->num_rows > 0) {
            while ($row = $q_id->fetch_assoc()) {
                echo "id: " . $row['Id'] . "<br>";

                $e_id = $row['Id'];

                $query = "INSERT INTO equipment_request (name, email, university, batch, equipment, description, date) 
                VALUES('$name', '$email', '$university', '$batch', $e_id, '$description', '$combinedDT')";

                if (!mysqli_query($con, $query)) {
//                echo("Error description: " . $con -> error);
                    echo "<script>";
                    echo "alert('Register Failed.');";
                    echo "window.location = '../SportItems.php#request_form';"; // redirect with javascript, after page loads
                    echo "</script>";
                } else {
                    echo "<script>";
                    echo "alert('Request Successfull.');";
                    echo "window.location = '../SportItems.php';"; // redirect with javascript, after page loads
                    echo "</script>";
                    $errors = [];
                }
            }
        }
        mysqli_close($con);
    } else {
        echo "<script>";
        echo "window.location = '../SportItems.php#request_form';"; // redirect with javascript, after page loads
        echo "</script>";
    }

}

?>