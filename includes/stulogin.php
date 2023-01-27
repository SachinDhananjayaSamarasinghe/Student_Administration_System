<?php include ('stuserver.php'); ?>
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
	background: url(img/stulogin.jpg);
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
	background:red;
	border: none;
	border-radius: 5px;
	padding: 10px;

}

.btn1{
	font-size: 15px;
	color: white;
	background: green;
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
		<h2>Student Login</h2>
	</div>

	<form action="stulogin.php" method="post">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label><strong>Name</strong></label>
			<input type="text" name="name">
		</div>
		<div class="input-group">
			<label><strong>Registration No</strong></label>
			<input type="text" name="reg_no">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">&nbsp &nbsp Login &nbsp &nbsp</button>
		</div>
		<br>
		<p>
			<strong>Yet To Be Registered?</strong> <a style="text-decoration: none; color: red;" href="stucreate.php"><strong>Register</strong>
			</a>
		</p>
	</form>

	<br><br>
		<div >
               <a style="text-decoration: none; margin-left: 50px; " class="btn" href="home.php">&nbsp &nbsp &nbsp Home &nbsp &nbsp &nbsp</a>
        </div>

</body>
</html>