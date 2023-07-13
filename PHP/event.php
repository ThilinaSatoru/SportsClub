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

function donate($fname, $lname, $email, $title, $type, $description) {
	global $con;

	$query = "INSERT INTO event (fname, lname, email, title, type, description) VALUES('$fname', '$lname', '$email', '$title', '$type', '$description')";
	mysqli_query($con, $query);
	
	if($query){
		if (headers_sent()) {
			die("Redirect failed. Please click on this link: <a href=...>");
		}
		else{
			exit(header('location: ../Events.php'));
		}
	}
	mysqli_close($con);	
}


?>