<?php
session_start();
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

    if ($results) {
        // Check if any rows were returned.
        if (mysqli_num_rows($results) > 0) {
            // Fetch the first row as an associative array.
            $row = mysqli_fetch_assoc($results);

            // Access the 'username' column from the result.
            $username = $row['username'];
            $_SESSION['username'] = $username;

            // Do something with $username.
            echo "Username: " . $username;
            echo "<script>";
            echo "alert('Welcome " . $username . "');";
            echo "window.location = '../index.php';"; // redirect with javascript, after page loads
            echo "</script>";
        } else {
            // No matching user found.
            echo "User not found.";
            echo "<script>";
            echo "alert('Wrong username/password combination.');";
            echo "window.location = '../login.php';"; // redirect with javascript, after page loads
            echo "</script>";
        }
    } else {
        // Query execution failed.
        echo "Query failed: " . mysqli_error($con);
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
                echo "<script>";
                echo "alert('" . $name_error . "');";
                echo "window.location = '../login.php';";
                echo "</script>";
			}
			if(mysqli_num_rows($res_e) > 0) {
				$email_error = "Account exists with this Email";
                echo "<script>";
                echo "alert('" . $email_error . "');";
                echo "window.location = '../login.php';";
                echo "</script>";
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
			die("Redirect failed. Please click on this link: <a href=../login.php>");
		}
		else{
            echo "<script>";
            echo "alert('Register Successful.');";
            echo "window.location = '../login.php';";
            echo "</script>";
		}
	}
	mysqli_close($con);	
}

?>