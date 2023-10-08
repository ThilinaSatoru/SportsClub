<?php 
include("connection.php");
include("functions.php");

$d_fname ="";
$d_lname = "";
$d_phone = "";
$d_email = "";
$d_fund = "";
$d_message = "";

$errors = [];

if (isset($_POST['donate'])) {
    $d_fname = $_POST['fname'];
    $d_lname = $_POST['lname'];
    $d_phone = $_POST['phone'];
    $d_email = $_POST['email'];
    $d_fund = $_POST['fund'];
    $d_message = $_POST['message'];

    donate($d_fname, $d_lname, $d_phone, $d_email, $d_fund, $d_message);
}

function validate_donation($d_fname, $d_lname, $d_phone, $d_email, $d_fund, $d_message)
{
    if (!preg_match('/^[A-Za-z\s]+$/', $d_fname)) {
        $errors["First Name"] = "Invalid Name.";
    }

    if (!preg_match('/^\+94\d{9}$/', $d_phone)) {
        $errors["phone"] = "Invalid Phone number! (+94123456789)";
    }

    if (!preg_match('/^[0-9]+$/', $d_fund)) {
        $errors["fund"] = "Invalid! Only digits allowed.";
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

function donate($fname, $lname, $phone, $email, $fund, $message)
{
    global $con;
    if (validate_donation($fname, $lname, $phone, $email, $fund, $message)) {
        $query = "INSERT INTO donation (fname, lname, phone, email, fund, message) VALUES('$fname', '$lname', '$phone', '$email', '$fund', '$message')";
        mysqli_query($con, $query);

        if ($query) {
            if (headers_sent()) {
                die("Redirect failed. Please click on this link: <a href=../donationForm.php>");
            } else {
                echo "<script>";
                echo "alert('Donation Successful.');";
                echo "window.location = '../donationForm.php';"; // redirect with javascript, after page loads
                echo "</script>";
            }
        } else {
            echo "<script>";
            echo "alert('Donation Failed.');";
            echo "window.location = '../donationForm.php#donation-form';"; // redirect with javascript, after page loads
            echo "</script>";
        }
        mysqli_close($con);
    } else {
        echo "<script>";
        echo "window.location = '../donationForm.php#donation-form';"; // redirect with javascript, after page loads
        echo "</script>";
    }
}


?>