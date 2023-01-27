<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = "";
$errors = array();

$conn = new mysqli('localhost', 'root', '', 'registration');

if ($_POST) {
	$email = $_POST['email'];
	$sql = mysqli_query($conn,"SELECT * FROM user WHERE email = '{$email}'") or die(mysqli_error($conn));
	$count = mysqli_num_rows($sql);
	$data = mysqli_fetch_array($sql);

	if ($count>0) {

		// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sachindan69@gmail.com';                     // SMTP username
    $mail->Password   = 'summerslam15';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sachindan69@gmail.com', 'System Login Password..!');
    $mail->addAddress($email, $email);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Forgot Password?';
    $mail->Body    = "Hi $email your password is {$data['password']}";
    $mail->AltBody = "Hi $email your password is {$data['password']}";

    $mail->send();
    array_push($errors,"The password has been sent on your email..");
} catch (Exception $e) {
    array_push($errors,"Email could not be sent. Mailer Error: {$mail->ErrorInfo}");
}

	}

    else if(empty($email)){
        array_push($errors, "Email is required..");
    }

	else{
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
        <h2>Forgot Password?</h2>
    </div >

	<form action="" method="post">

<?php include('errors.php'); ?>

	<div>
		<div  class="input-group">
			<lable><strong>Email Verification</strong></lable>
			<input type="email" name="email" placeholder="Enter email address you registered with...">
		</div>

		<div  class="input-group">
			<button type="submit" class="btn" name="submit">&nbsp Submit &nbsp</button>
		</div>
		
	</div>
</form>

<br><br><br><br><br><br><br><br><br>
        <div >
               <a style="text-decoration: none; margin-left: 50px; " class="btn" href="login.php">&nbsp &nbsp &nbsp Back &nbsp &nbsp &nbsp</a>
        </div>
</body>
</html>