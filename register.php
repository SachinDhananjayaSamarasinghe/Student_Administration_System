<?php include ('server.php'); ?>
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
		<h2>Register</h2>
	</div>

	<form action="register.php" method="post">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label><strong>Username</strong></label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label><strong>E-mail</strong></label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label><strong>Password</strong></label>
			<input type="password" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and one lowercase letter, and at least 8 or more characters.">
		</div>
		<div class="input-group">
			<label><strong>Confirm Password</strong></label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			<strong>Registered Already?</strong> <a style="text-decoration: none; color: red;" href="login.php"><strong> Sign In</strong></a>
		</p>
	</form>

	<!--	<div >
               <a style="text-decoration: none; margin-left: 50px; " class="btn" href="home.php">&nbsp &nbsp &nbsp Home &nbsp &nbsp &nbsp</a>
        </div>
-->
</body>
</html>