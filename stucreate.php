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
        echo "<b><h4> Successfully registered as a student.</h4></b>";
        header('Refresh:3;url=stulogin.php');
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                      <legend><h3>New Student Registration</h3></legend>
                    </div>
                <br>
                    <form class="form-horizontal" action="stucreate.php" method="post">
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
                            <input name="gender" type="radio"  value="Male" checked><font style="margin-left:10px; ">Male</font><br>
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
                          <a class="btn" href="stulogin.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>