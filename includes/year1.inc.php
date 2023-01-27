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



	$sql= "INSERT INTO x(sub1,sub2, sub3, sub4, sub5, sub6, sub7, sub8, sub9, sub10, sub11, sub12, sub13, sub14, sub15, sub16, sub17 , email)
		VALUES('$mi','$mii','$bio','$cs','$es','$chem', '$phy', '$mfb', '$bfm', '$is', '$cmi', '$iti',  '$ei', '$mfbii', '$bes', '$sm', '$eii' ,  '$email');";

if(mysqli_query($conn,$sql)){
	echo "Course registration successful." ;
	header('Refresh:2;url=test.php');
	}
	else{
	echo "You have already registered for the courses.";
	 header('Refresh:2;url=test.php');
 }

?>
