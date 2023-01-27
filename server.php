<?php

session_start();

$username = "";
$email = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// if the register button is clicked
if(isset($_POST['register'])){
/*	$username = mysqli_real_escape_string($db,$_POST['username']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
	$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db,$_POST['password_2']); */

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];

	//ensure that form fields are filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password_1)) {
		array_push($errors, "Password is required");
	}

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	$sqli = mysqli_query($db,"SELECT * FROM user WHERE email='".$email."'");
	if (mysqli_num_rows($sqli)==1) {
		array_push($errors,"Email is not available for registration");
	}

	// if there is no errors, save user to database
	if(count($errors) == 0){
		$password = $password_1; // encrypt password before storing in database (security)
		$sql = "INSERT INTO user (username, email, password) 
		VALUES ('$username', '$email', '$password')";
		mysqli_query($db,$sql);
	  	$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged as the admin";
		header('location: adminhome.php'); //redirect to admin page
	}
}


// log user from login page
if(isset($_POST['login'])){
//	$username = mysqli_real_escape_string($db,$_POST['username']);
//	$password = mysqli_real_escape_string($db,$_POST['password']);

    $username = $_POST['username'];
	$password = $_POST['password'];

	//ensure that form fields are filled properly
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
	if(count($errors) == 0){
	//	$password = md5($password); // encrypt password before comparing with that from database
		$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
			//log user in
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged as the admin";
			header('location: adminhome.php'); //redirect to admin page
		} else{
			array_push($errors, "Incorrect username or password.");
		}
	}

}

//logout

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: login.php');

}

?> 