<?php 
include("connection.php");
include("functions.php");

if (isset($_POST['contact'])) {
	SaveContact();
}

function SaveContact() {
    global $con;
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO contacts (fullname, email, message) VALUES('$name', '$email', '$message')";
	mysqli_query($con, $query);
	
	if($query) {
		if (headers_sent()) {
			die("Redirect failed. Please click on this link: <a href=...>");
		}
		else{
			exit(header('location: ../index.php'));
		}
	}
}

?>