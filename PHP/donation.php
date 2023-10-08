<?php 
include("connection.php");
include("functions.php");

$d_fname ="";
$d_lname = "";
$d_phone = "";
$d_email = "";
$d_fund = "";
$d_message = "";


if (isset($_POST['donate'])) {
	$d_fname = $_POST['fname'];
    $d_lname = $_POST['lname'];
    $d_phone = $_POST['phone'];
    $d_email = $_POST['email'];
    $d_fund = $_POST['fund'];
    $d_message = $_POST['message'];
	
    donate($d_fname, $d_lname, $d_phone, $d_email, $d_fund, $d_message);
}

function donate($fname, $lname, $phone, $email, $fund, $message) {
	global $con;

	$query = "INSERT INTO donation (fname, lname, phone, email, fund, message) VALUES('$fname', '$lname', '$phone', '$email', '$fund', '$message')";
	mysqli_query($con, $query);
	
	if($query){
		if (headers_sent()) {
			die("Redirect failed. Please click on this link: <a href=../donationForm.php>");
		}
		else{
            echo "<script>";
            echo "alert('Donation Successfull.');";
            echo "window.location = '../donationForm.php';"; // redirect with javascript, after page loads
            echo "</script>";
		}
	} else {
        echo "<script>";
        echo "alert('Donation Failed.');";
        echo "window.location = '../donationForm.php';"; // redirect with javascript, after page loads
        echo "</script>";
	}
	mysqli_close($con);	
}


?>