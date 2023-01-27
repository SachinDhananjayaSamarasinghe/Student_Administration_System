<?php

$email = "";
$errors = array();

$conn = mysqli_connect('localhost','root','','registration');

if (isset( $_POST['submit'])) {
	$email = mysqli_real_escape_string($conn,$_POST['email']);

	$sql = mysqli_query($conn,"SELECT * FROM user WHERE email='".$email."'");
	if (mysqli_num_rows($sql)==1) {
		header('location:resetpwd.php?email='.$email);
	}else if(empty($email)){
		array_push($errors, "Email is required..");
	}

	else {
		array_push($errors, "Sorry, Email is not available..!");
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
		<h2>Forget Password?</h2>
	</div >
<form  method="post">

	<?php include('errors.php'); ?>


<div>
	
		<div  class="input-group">
			<lable><strong>Email Verification</strong></lable>
			<input type="text" name="email" placeholder="Enter email address you registered with...">
		</div>

		<div  class="input-group">
            <button type="submit" class="btn" name="submit">&nbsp Check &nbsp</button>                    
        </div>

	</div>
	</form>
	<br><br><br><br><br><br><br><br><br>
		<div >
               <a style="text-decoration: none; margin-left: 50px; " class="btn" href="login.php">&nbsp &nbsp &nbsp Back &nbsp &nbsp &nbsp</a>
        </div>

</body>
</html>