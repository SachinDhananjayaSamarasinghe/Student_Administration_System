<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $message = $_POST['message'];

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
    $mail->setFrom('sachindan69@gmail.com', 'User Reviews');
    $mail->addAddress('sachindan69@gmail.com', 'FAS - SEUSL');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'User Feedback';
    $mail->Body    = " Name = $name  <br><br> Email = $email <br><br> Phone = $mobile <br><br>  Feedback = $message ";
    $mail->AltBody = 'Hello World</b>';

    $mail->send();
    echo "<script>alert('Message has been sent successfully')</script>";
} catch (Exception $e) {
    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

 @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Roboto:400,500,700');

 a, a:hover, a:visited, a:active, a:link
{
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
  -webkit-text-shadow: rgba(0,0,0,.01) 0 0 1px;
  text-shadow: rgba(0,0,0,.01) 0 0 1px;
}

ul
{
  list-style: none;
  margin-bottom: 0px;
}

textarea{
  color: #555;
}

 .header{
  position: absolute;
  top: 0px;
  left:50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  width: 100%;
  height: 56px;
  background: #FFFFFF;
  z-index: 10;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}

.header.scrolled .header_content::before
{
  box-shadow: 0px 20px 49px rgba(0,0,0,0.17);
}
.header_content
{
  float: left;
  height: 100%;
}
.header_content::before
{
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: '';
  box-shadow: 0px 20px 49px rgba(0,0,0,0.67);
  z-index: -1;
}

.logo_container
{
  display: inline-block;
  padding-left: 100px;
}
.logo span
{
  font-family: 'Open Sans', sans-serif;
  font-size: 30px;
  font-weight: 900;
  color: #3a3a3a;
  vertical-align: middle;
  text-transform: uppercase;
  margin-left: 3px;
}

.main_nav_container
{
  display: inline-block;
  margin-left: auto;
  padding-right: 0px;
}
.main_nav
{
  margin-top: 0px;
}
.main_nav_item
{
  display: inline-block;
  margin-right: 40px;
}
.main_nav_item:last-child
{
  margin-right: 0px;
}
.main_nav_item a
{
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  text-transform: uppercase;
  font-weight: 700;
  color: #3a3a3a;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.main_nav_item a:hover
{
  color: #ffb606;
}

.admin-box 
{
  color: white;
}

.admin-box a:hover
{
  color: black;
}

.header_side
{
  width: 279px;
  height: 100%;
  background: #ffb606;
}
.header_side img
{
  width: 29px;
  height: 29px;
}
.header_side span
{
  display: block;
  position: relative;
  font-size: 18px;
  font-weight: 500;
  color: #FFFFFF;
  padding-left: 12px;
}

.footer
{
  width: 100%;
  padding-top: 10px;
  padding-bottom: 20px;
  background: #1a1a1a;
}
.footer .section_title h1
{
  color: #FFFFFF;
}

.footer_content 
{
  padding-top: 0px;
  padding-bottom: 0px;
  
}
.footer_content .logo_container
{
  padding-left: 0px;
  padding-top: 80px;
}
.footer_content .logo span
{
  color: #FFFFFF;
}
.footer_about_text
{
  margin-top: 0px;
  margin-bottom: 0px;
  padding-right: 20px;
}
.footer_column_title
{
  font-size: 18px;
  font-weight: 500;
  color: #FFFFFF;
  padding-top: 15px;
}
.footer_column_content
{
  margin-top: 32px;
  float: left;
}
.footer_list_item
{
  margin-bottom: 11px;
}
.footer_list_item a
{
  font-size: 14px;
  color: #a5a5a5;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.footer_list_item a:hover
{
  color: #ffb606;
}
.footer_contact_item
{
  font-size: 10px;
  font-weight: 400;
  color: #a5a5a5;
  margin-bottom: 22px;
}
.footer_contact_item:last-child
{
  margin-bottom: 0px;
}
.footer_contact_icon
{
  display: inline-block;
  width: 24px;
  height: 24px;
  vertical-align: middle;
  margin-right: 10px;
}
.footer_contact_icon img
{
  width: 100%;
}

.footer_bar
{
  padding-top: 19px;
  padding-bottom: 19px;
}
.footer_social .menu_social_item a i
{
  color: #FFFFFF;
}
.footer_social .menu_social_item a i:hover
{
  color: #ffb606;
}
.footer_social .menu_social_item:last-child
{
  margin-right: 0px;
}

    </style>
</head>
<body>

    <header class="header d-flex flex-row">
    <div class="header_content d-flex flex-row align-items-center">
      <!-- Logo -->
      <div class="logo_container">
        <div class="logo">
          <img style="margin-left: -75px;height:55px;width: 317px;"  src="img/logo1.png" alt="">
        </div>
      </div>

      <!-- Main Navigation -->
      <nav class="main_nav_container">
        <div class="main_nav">
          <ul class="main_nav_list">
            <li class="main_nav_item"><a href="home.php">HOME</a></li>
            <li class="main_nav_item"><a href="homecreate.php">STUDENT REGISTRATION</a></li>
            <li class="main_nav_item"><a href="stulogin.php">COURSE REGISTRATION</a></li>
            <li class="main_nav_item"><a href="contact.php">CONTACT US</a></li>
            <li class="main_nav_item"><a style="color: red;" href="login.php"><strong>ADMIN</strong></a></li>
          </ul>
        </div>
      </nav>
    </div>

  </header>
  
<br><br><br><br>


  <div class="container">
    <div class="row">
     <legend><h3>Contact Us</h3></legend> 
    </div>
    <br>

  <div style="width:35%;color:white; background:#e0ebeb; border:1px solid #e0ebeb; border-radius:10px 10px 10px 10px; padding:20px; float:left;">
      <h5 style="color: #5c5c3d;"><Strong>OUR ADDRESS</Strong></h5>
      <address style="color: black;">
        Faculty of Applied Sciences,<br>
        South Eastern University of Sri Lanka,<br>
        Sammanthurai,<br>
        Sri Lanka.
      </address>
<br>
      <h5 style="color: #5c5c3d;"><Strong>OUR CONTACT NUMBERS</Strong></h5>

     <p><h5 style="color:black;"><strong  style="color: #5c5c3d;">Phone:</strong>&nbsp +94 67 2260893</h5></p>
     <p><h5 style="color:black;"><strong  style="color: #5c5c3d;">Fax:</strong>&nbsp +94 67 2260465</h5></p><br>
<br>
      <h5 style="color: #5c5c3d;"><Strong>DEAN</Strong></h5>
      
   <p style="color: black;"> <img src="img/zain.jpg" alt="Dr. UL. Zainudeen" style="width:17%;"><strong>&nbsp &nbsp Dr. UL. Zainudeen</strong>
   </p>
     <p><h5 style="color:black;"><strong  style="color: #5c5c3d;">Phone:</strong>&nbsp +94 67 2260073</h5></p>
     <p><h5 style="color:black;"><strong  style="color: #5c5c3d;">E-mail:</strong><a href="mailto:ulzdeen@seu.ac.lk">&nbsp ulzdeen@seu.ac.lk
     </a></h5></p><br>
    </div>

  <div style="width:60%; height:501px;color:white; background:#e0ebeb; border:1px solid #e0ebeb; border-radius:10px 10px 10px 10px; padding:20px; float:right;">
      <h5 style="color: #5c5c3d;"><Strong>FIND US ON MAP</Strong></h5>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15585.863335239495!2d81.78457136300291!3d7.3596123264949735!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcba0fce59fb938d9!2sFaculty+of+Applied+Science!5e0!3m2!1sen!2slk!4v1554314579186!5m2!1sen!2slk" width="640" height="417" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <br>
    <br>

        <div class="container" style="width:75%;color:white; background:#e0ebeb; border:1px solid #e0ebeb; border-radius:10px 10px 10px 10px; padding:20px; float:left; margin-top: 50px; margin-left: 150px;">
                <div class="span10 offset1">
                    <div class="row">
                        <h5 style="color: #5c5c3d;"><strong>DON'T FORGET TO LEAVE A MESSAGE</strong></h5>
                    </div>
                <br><br>
                    <form class="form-horizontal" method="post" >
                      <div class="control-group">
                        <label class="control-label"><strong style="color: #5c5c3d;">Name:</strong></label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Your name..."  required style="margin-top:8px;">
                        </div>
                      </div>
                      <br>
                      <div class="control-group">
                        <label class="control-label"><strong style="color: #5c5c3d;">Email:</strong></label>
                        <div class="controls">
                            <input name="email" type="email" placeholder="Your email..." required style="margin-top:8px;">
                        </div>
                      </div>
                      <br>
                      <div class="control-group">
                        <label class="control-label"><strong style="color: #5c5c3d;">Mobile:</strong></label>
                        <div class="controls">
                            <input name="mobile" type="text"  placeholder="Your mobile..." required style="margin-top:8px;">
                        </div>
                      </div>
                      <br>
                      <div class="control-group">
                        <label class="control-label"><strong style="color: #5c5c3d;">Message:</strong></label>
                        <div class="controls">
                          <textarea name="message" style="width: 450px; height: 200px;"  placeholder="Your message here..." ></textarea>
                        </div>
                      </div>

                    <br>
                      <div>
                          <button type="submit" class="btn btn-success" style="margin-left: 180px;">Submit</button>
                        </div>
                    </form>
                </div>
                 
    </div>
</form>
</div> 

<br><br><br><br>

  </div>

     <footer class="footer" style="font-family: 'Roboto', sans-serif;font-size: 14px;font-weight: 400;color: #a5a5a5;">
        <div class="container">
            
            <!-- Footer Content -->

            <div class="footer_content">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_col">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                <img src="img/logo1.png" alt="">
                                <img style="padding-bottom:60px;" src="img/logo2.png" alt="">
                                
                                
                                
                            </div>
                        </div>
                    </div>

                    <!-- Footer Column - Menu -->

                    <div class="col-lg-3 footer_col">
                    <div class="footer_column_title" style="margin-left: 100px; margin-top: 50px;">Menu</div>
                      <div class="footer_column_content">
                          <ul style="margin-left: 100px;">
                                <li class="footer_list_item"><a href="home.php">Home</a></li>
                                <li class="footer_list_item"><a href="homecreate.php">Student Registration</a></li>
                                <li class="footer_list_item"><a href="stulogin.php">Course Registration</a></li>
                                <li class="footer_list_item"><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title" style="margin-left: 80px; margin-top: 50px;">Contact - SEUSL</div>
                        <div class="footer_column_content">
                            <ul style="margin-left: 80px;">
                                <li class="footer_list_item">
                                    <i class="fa fa-envelope icon"></i>
                                    University Park, Oluvil,&nbsp &nbsp &nbsp &nbsp  #32360, Sri Lanka.
                                </li>
                                <li class="footer_list_item">
                                    <i class="fa fa-phone icon"></i>
                                     +94 67 2255062 /63 /64 
                                </li>
                                <li class="footer_list_item">
                                    <i class="fa fa-fax icon"></i>
                                    +94 67 2255217
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title" style="margin-left: 50px; margin-top: 50px;">Social Media - SEUSL</div>
                        <div class="footer_column_content">
                            <ul style="margin-left: 120px;">
                                <li class="footer_list_item"><a href="https://www.facebook.com/pages/South-Eastern-University-of-Sri-Lanka/992110304136392"><i style="margin-left: 5px;" class="fab fa-facebook-f"></i></a></li>
                                <li class="footer_list_item"><a href="https://twitter.com/SEUSL_Oluvil"><i style="margin-left:2px;" class="fab fa-twitter"></i></a></li>
                                <li class="footer_list_item"><a href="https://www.youtube.com/channel/UCUtXxXZnUq3OxnpHmCc8heg"><i style="margin-left: 1px;" class="fab fa-youtube"></i></a></li>
                                <li class="footer_list_item"><a href="https://lk.linkedin.com/in/seusl"><i style="margin-left:2px;" class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>