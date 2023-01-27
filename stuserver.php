<?php

session_start();

$name = "";
$reg_no = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// log user from login page
if(isset($_POST['login'])){
	$name = mysqli_real_escape_string($db,$_POST['name']);
	$reg_no = mysqli_real_escape_string($db,$_POST['reg_no']);

	//ensure that form fields are filled properly
	if (empty($name)) {
		array_push($errors, "Name is required");
	}
	if (empty($reg_no)) {
		array_push($errors, "Registration number is required");
	}
	if(count($errors) == 0){
		//$password = md5($password); // encrypt password before comparing with that from database
		$query = "SELECT * FROM students WHERE name='$name' AND reg_no='$reg_no'";
		$result = mysqli_query($db,$query);
		if(mysqli_num_rows($result)==1){
			//log user in
			$_SESSION['name'] = $name;
			$_SESSION['success'] = "You are now logged as a student";
			header('location: test.php'); //redirect to test page
		} else{
			array_push($errors, "Incorrect name or registration no.");
		}
	}

}

//logout

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['name']);
	header('location: stulogin.php');

}

?> 