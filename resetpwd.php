<?php

$newpwd = "";
$errors = array();

$conn = mysqli_connect('localhost','root','','registration');

if (isset($_POST['submit'])) {
	//$newpwd = $_POST['newpwd'];
	//$email = $_GET['email'];
	$newpwd = mysqli_real_escape_string($conn,$_POST['newpwd']);
	$email = mysqli_real_escape_string($conn,$_GET['email']);

	if(empty($newpwd)){
		array_push($errors, "Password is required..");
}
	if(count($errors) == 0){
	$newpwd = md5($newpwd);
	$sqli = mysqli_query($conn,"UPDATE user SET password = '".$newpwd."' WHERE email = '".$email."' ");
	if ($sqli) {
		array_push($errors, "Password reset successfully..");
		header('Refresh:2;url=login.php');
	}
	else{
		array_push($errors, "Password reset unsuccessful..!");
	}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
<style>
*{
	margin: 0px;
	padding: 0px;
}

body{
	font-size: 120%;
	background: white;
	background: url(img/adlog.jpg);
	background-size: cover;
	background-position:absolute;
}

.header{
	width: 30%;
	margin: 50px auto 0px;
	color: black;
	background:transparent;
	text-align: center;
	border: 1px solid black;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}

form, .content{
	width: 30%;
	color: black;
	margin: 0px auto;
	background: transparent;
	border: 1px solid black;
	border-radius: 0px 0px 10px 10px;
	padding: 20px;
}

.input-group{
	margin: 10px 0px 10px 0px;
}

.input-group label{
	display: block;
	text-align: left;
	margin: 3px;
}

.input-group input{
	height: 30px;
	width: 93%;
	font-size: 16px;
	border: 1px solid black;
	border-radius: 5px;
	padding: 5px 10px;
	background: transparent;
}

.btn{
	font-size: 15px;
	color: white;
	background: red;
	border: none;
	border-radius: 5px;
	padding: 10px;

}

.error{
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid pink;
	color: #a94442;
	background: pink;
	border-radius: 5px;
	text-align: left;
}

.success{
	color: red;
	background: black;
	border:1px solid red;
	margin-bottom: 20px;
}
</style>
</head>
<body>
	<div class="header">
		<h2>Reset Password</h2>
	</div >
	<form action="" method="post">

			<?php include('errors.php'); ?>

		<div>
			<div class="input-group">
				<strong>New Password</strong> <input type="password" name="newpwd" placeholder="Enter your new password..." 
				pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and one lowercase letter, and at least 8 or more characters.">
			</div>

		<div class="input-group">
            <button type="submit" class="btn" name="submit">Change</button>                    
        </div>

		</div>
		
	</form>

</body>
</html>