<?php 
include("connection.php");
include("functions.php");

if (isset($_POST['login'])) {
	login();
}

function login() {
    global $con;
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // $password = md5($pass);

	$query = "SELECT * FROM user WHERE username='$user' AND password='$pass' LIMIT 1";
	$results = mysqli_query($con, $query);

	if (mysqli_num_rows($results) == 1) { 
		// user found
		$logged_in_user = mysqli_fetch_assoc($results);
		// $_SESSION['user'] = $logged_in_user;
		// $_SESSION['success']  = "User logged in";
		echo "<script> alert('Welcome " . $logged_in_user . "') </script>";
		header("location: ../index.php");
		
	} else {
		echo "<script> alert('Wrong username/password combination.') </script>";
		array_push($errors, "Wrong username/password combination");
		header("location: ../login.php");
	}
	mysqli_close($con);	
}


if (isset($_POST['register'])) {
	global $con;
	
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

    if($username!=null && $email!=null && $password1!=null) {
		if($password1 == $password2) {

			$sql_u = "SELECT * FROM user WHERE username='$username'";
			$sql_e = "SELECT * FROM user WHERE email='$email'";
			$res_u = mysqli_query($con, $sql_u);
			$res_e = mysqli_query($con, $sql_e);


			if (mysqli_num_rows($res_u) > 0) {
				$name_error = "User ID already taken";
				echo "<script> alert('" . $name_error . "') </script>";
			}
			else if(mysqli_num_rows($res_e) > 0) {
				$email_error = "Account exists with this Email";
				echo "<script> alert('" . $name_error . "') </script>";
			}
			else{
				register($username, $password1, $email);
			}
		}
	}
}

function register($user, $pass, $email) {
	global $con;

	$query = "INSERT INTO user (username, password, email) VALUES('$user','$pass', '$email')";
	mysqli_query($con, $query);
	
	if($query){
		if (headers_sent()) {
			die("Redirect failed. Please click on this link: <a href=...>");
		}
		else{
			echo "<script> alert('Register Successfull.') </script>";
			exit(header('location: ../login.php'));
		}
	}
	mysqli_close($con);	
}

?>