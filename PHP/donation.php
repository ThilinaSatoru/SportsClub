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
			die("Redirect failed. Please click on this link: <a href=...>");
		}
		else{
			exit(header('location: ../donationForm.php'));
		}
	}
	
}


?>