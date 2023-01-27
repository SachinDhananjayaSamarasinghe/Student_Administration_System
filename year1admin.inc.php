<?php

error_reporting(E_PARSE | E_ERROR);

$mi = $_POST['mi'];
$mii = $_POST['mii'];
$bio = $_POST['bio'];
$cs = $_POST['cs'];
$es = $_POST['es'];
$chem = $_POST['chem'];
$phy = $_POST['phy'];
$mfb = $_POST['mfb'];
$bfm = $_POST['bfm'];
$is = $_POST['is'];
$cmi = $_POST['cmi'];
$iti = $_POST['iti'];
$vb = $_POST['vb'];
$ei = $_POST['ei'];
$mfbii = $_POST['mfbii'];
$bes = $_POST['bes'];
$sm = $_POST['sm'];
$eii = $_POST['eii'];
$email = $_POST['email'];

$conn=mysqli_connect("localhost" , "root" , "");

if(!$conn){
	die ('could not connect :' . mysqli_error());
}

mysqli_select_db($conn,"registration");

$valid = true;

$sqli = mysqli_query($conn,"SELECT * FROM students WHERE email='".$email."'");
        if (mysqli_num_rows($sqli)!=1) {    
        echo "<b><h3>E-mail is not available for registration.</h3></b>";
        header('Refresh:3;url=year1info.php');
        $valid = false;
    }

if ($valid) {
	$sql= "INSERT INTO year1(sub1,sub2, sub3, sub4, sub5, sub6, sub7, sub8, sub9, sub10, sub11, sub12, sub13, sub14, sub15, sub16, sub17, sub18, email)
		VALUES('$mi','$mii','$bio','$cs','$es','$chem', '$phy', '$mfb', '$bfm', '$is', '$cmi', '$iti', '$vb', '$ei', '$mfbii', '$bes', '$sm',
		 '$eii' ,  '$email');";

if(mysqli_query($conn,$sql)){
	echo "<b><h4> Successfully registered for the courses.</h4></b>" ;
	header('Refresh:3;url=year1info.php');
	}
	else{
		echo "<b><h4> You have already registered for the courses.</h4></b>";
	header('Refresh:3;url=year1info.php');
	}
}
?>
