<?php 
include("connection.php");
include("functions.php");

$e_fname ="";
$e_lname = "";
$e_email = "";
$e_title = "";
$e_type = "";
$e_description = "";

if (isset($_POST['reg_event'])) {
    $e_fname = $_POST['fname'];
    $e_lname = $_POST['lname'];
    $e_email = $_POST['email'];
    $e_title = $_POST['title'];
    $e_type = $_POST['type'];
    $e_description = $_POST['description'];

    donate($e_fname, $e_lname, $e_email, $e_title, $e_type, $e_description);
}

function validate_events($e_fname, $e_lname, $e_email, $e_title, $e_type, $e_description)
{

    if (!preg_match('/^[A-Za-z\s]+$/', $e_fname)) {
        $errors["First Name"] = "Invalid First Name.";
    }

    if (!preg_match('/^[A-Za-z\s]+$/', $e_lname)) {
        $errors["First Name"] = "Invalid Last Name.";
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

function donate($fname, $lname, $email, $title, $type, $description)
{
    global $con;

    if (validate_events($fname, $lname, $email, $title, $type, $description)) {
        $query = "INSERT INTO event (fname, lname, email, title, type, description) VALUES('$fname', '$lname', '$email', '$title', '$type', '$description')";
        mysqli_query($con, $query);

        echo "<script>";
        if (headers_sent()) {
            echo "alert('Something Went Wrong!');";
            echo "</script>";
            die("Redirect failed. Please click on this link: <a href=../Events.php>");
        } else {
            echo "alert('Event Added Successfully.');";
            echo "window.location = '../Events.php';"; // redirect with javascript, after page loads
            echo "</script>";
        }

        mysqli_close($con);
    } else {
        echo "<script>";
        echo "window.location = '../SportItems.php#request_form';"; // redirect with javascript, after page loads
        echo "</script>";
    }
}
