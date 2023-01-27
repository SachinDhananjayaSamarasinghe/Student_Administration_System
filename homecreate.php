<?php
     
    error_reporting(E_PARSE | E_ERROR);
     
    require 'database.php';

    $db = mysqli_connect('localhost', 'root', '', 'registration');
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $nameError = null;
        $reg_noError = null;
        $emailError = null;
        $addressError = null;
        $facultyError = null;
        $genderError = null;
        $fieldError = null;
         
        // keep track post values
        $name = $_POST['name'];
        $reg_no = $_POST['reg_no'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $faculty = $_POST['faculty'];
        $gender = $_POST['gender'];
        $field = $_POST['field'];
         
        // validate input
        $valid = true;
        if (empty($name)) {
            $nameError = 'Please Enter Name';
            $valid = false;
        }
         
        if (empty($reg_no)) {
            $reg_noError = 'Please Enter Registration Number';
            $valid = false;
        }

        if (empty($email)) {
            $emailError = 'Please Enter E-mail Address';
            $valid = false;
        }
        elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Please Enter a valid E-mail Address';
            $valid = false;  
        }
         
        if (empty($address)) {
            $addressError = 'Please Enter Address';
            $valid = false;
        }

        if (empty($faculty)) {
            $facultyError = 'Please Enter Faculty';
            $valid = false;
        }

        if (empty($gender)) {
            $genderError = 'Please Select Gender';
            $valid = false;
        }

        if (empty($field)) {
            $fieldError = 'Please Select Field of Interest';
            $valid = false;
        }
         
    $sqlii = mysqli_query($db,"SELECT * FROM students WHERE reg_no='".$reg_no."'");
        if (mysqli_num_rows($sqlii)==1) {    
        echo "<b><h4>Registration Number is not available for registration.</h4></b>";
        $valid = false;
         }

     $sqli = mysqli_query($db,"SELECT * FROM students WHERE email='".$email."'");
        if (mysqli_num_rows($sqli)==1) {    
        echo "<b><h4>E-mail is not available for registration.</h4></b>";
        $valid = false;
         }
         
        // insert data
        if ($valid) {
        $sql = "INSERT INTO students (name,reg_no,email,address,faculty,gender,field) 
        VALUES ('$name', '$reg_no', '$email', '$address', '$faculty', '$gender', '$field')";
        mysqli_query($db,$sql);
      //  $_SESSION['username'] = $username;
      //  $_SESSION['success'] = "You are now logged as the admin";
      //  echo "<b><h4> Successfully registered as a student.</h4></b>";
        header('Refresh:2;url=stulogin.php');
      //  header('location: adminhome.php'); //redirect to admin page
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
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

/*********************************
3.1 Logo
*********************************/

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

/*********************************
3.2 Main Nav
*********************************/

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


/*********************************
3.3 Header Side
*********************************/

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

/*********************************
15.1 Newsletter
*********************************/

.newsletter
{
    padding-bottom: 85px;
    border-bottom: solid 2px #4d4e4e;
}
.newsletter_form_container
{
    width: 60%;
    margin-top: 48px;
}
.newsletter_email
{
    width: calc(100% - 164px);
    height: 42px;
    border: none;
    padding-left: 27px;
    font-weight: 500;
    color: #1a1a1a;
}
.newsletter_email:focus
{
    outline: solid 2px #ffb606;
}
.newsletter_submit_btn
{
    width: 164px;
    height: 42px;
    border: none;
    background: #ffb606;
    color: #FFFFFF;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
}
.newsletter_submit_btn:focus
{
    border: solid 2px #FFFFFF;
}

/*********************************
15.2 Footer Content
*********************************/

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

/*********************************
15.3 Footer Copyright
*********************************/

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
                    <img style="margin-left: -75px; height:55px;width: 317px;"  src="img/logo1.png" alt="">
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
                        <li class="main_nav_item"><a style="color: red;" href="login.php"><strong >ADMIN</strong></a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>
    <br><br><br><br>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                      <legend><h3>New Student Registration</h3></legend>
                    </div>
                <br>
                    <form class="form-horizontal" action="homecreate.php" method="post">
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($reg_noError)?'error':'';?>">
                        <label class="control-label">Registration Number</label>
                        <div class="controls">
                            <input name="reg_no" type="text" placeholder="Registration Number" value="<?php echo !empty($reg_no)?$reg_no:'';?>">
                            <?php if (!empty($reg_noError)): ?>
                                <span class="help-inline"><?php echo $reg_noError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                        <label class="control-label">E-mail</label>
                        <div class="controls">
                            <input name="email" type="email" placeholder="E-mail Address" value="<?php echo !empty($email)?$email:'';?>">
                            <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($addressError)?'error':'';?>">
                        <label class="control-label">Address</label>
                        <div class="controls">
                            <input name="address" type="text"  placeholder="Address" value="<?php echo !empty($address)?$address:'';?>">
                            <?php if (!empty($addressError)): ?>
                                <span class="help-inline"><?php echo $addressError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($facultyError)?'error':'';?>">
                        <label class="control-label">Faculty</label>
                        <div class="controls">
                            <input name="faculty" type="text"  placeholder="Faculty" value="<?php echo !empty($faculty)?$faculty:'';?>">
                            <?php if (!empty($facultyError)): ?>
                                <span class="help-inline"><?php echo $facultyError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($genderError)?'error':'';?>">
                        <label class="control-label">Gender</label>
                        <div class="controls">
                            <input name="gender" type="radio"  value="Male"><font style="margin-left:10px; ">Male</font><br>
                            <input name="gender" type="radio"  value="Female"><font style="margin-left:10px; ">Female</font>
                            <?php if (!empty($genderError)): ?>
                                <span class="help-inline"><?php echo $genderError;?></span>
                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($fieldError)?'error':'';?>">
                        <label class="control-label">Field of Interest</label>
                        <div class="controls">
                            <select name="field">
                      <option value="Physical Science">Physical Science</option>
                      <option value="Biological Science">Biological Science</option>
                            </select>
                            <?php if (!empty($fieldError)): ?>
                                <span class="help-inline"><?php echo $fieldError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                <br>
                      <div class="form-actions" style="margin-top: -8px;">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="home.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
 <br><br>
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