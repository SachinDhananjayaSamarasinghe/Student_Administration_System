<?php
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
$txt="Hello";
$to="sachindan69@gmail.com";
$subject="User Message";
$headers = "From: $name $email $mobile" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$message,$headers);
//mail($to, $subject, $txt, "From: .$name . $email . $mobile");
echo "Your message has been sent successfully..!";
?>