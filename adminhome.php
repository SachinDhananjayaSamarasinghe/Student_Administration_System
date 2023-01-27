<?php include('server.php'); 

if(empty($_SESSION['username'])){
  header('location:login.php');
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
            <div class="row">
             <legend><h3>Admin Panel </h3></legend>   
            </div>

            <br>

  <div style="font-family:Lato,sans-serif; font-style: italic; line-height: 1.5; font-size: 15px; text-align: center; color: #757575; ">
          <i>You can manage the relevant information by accessing the links available below.</i>
        </div>
      <!--    <br><br>
          <i>3 <sup>rd</sup>year special degree students must register for both 3 <sup>rd</sup>year general and special degree courses.</i>      

     </div>
-->
            <br>
            <div class="row">

              <div style="width:25%; height:300px; color:black; margin-left: 615px; background: #e0ebeb;border: 1px solid #e0ebeb;border-radius: 10px 10px 10px 10px;padding:20px; font-weight: bold; margin-top: 50px; ">

        <!--     <div  style="color:#5c5c3d ; margin-left: 25px;">
                <p><h5><strong> GENERAL / SPECIAL DEGREE</strong></h5></p>

            </div>
-->
                <p style="float: left; margin-top:10px; margin-left: 20px;">
                    <a href="admin.php" class="btn"> &nbsp  &nbsp  &nbsp  &nbsp Student Registration &nbsp  &nbsp  &nbsp  &nbsp</a>
                </p>          
               
<br><br><br><br><br><br>
                 <p style="margin-top: -40px;  margin-left: 20px;">
                    <a href="year1info.php" class="btn btn-success">Course Registration - 1 <sup>st</sup> Year</a>
                </p>
               <br>

                <br><br>
                 <p style="margin-top: -30px;  margin-left: 20px;">
                    <a href="year2info.php" class="btn btn-danger">Course Registration - 2 <sup>nd</sup> Year</a>
                </p>
                <br><br><br>
                <p style="margin-top: -30px;  margin-left: 20px;">
                    <a href="year3info.php" class="btn btn-info">Course Registration - 3 <sup>rd</sup> Year</a>
                </p>

               <br>

              
      </div> <!-- /container -->
     </div>

<!--
     <br>

        <div class="row">

              <div style="width:30%; height:300px; color:black; margin-left: 375px; background: #e0ebeb;border: 1px solid #e0ebeb;border-radius: 10px 10px 10px 10px;padding:20px; font-weight: bold; margin-top: -317px; float: left;">


            <div  style="color:#5c5c3d ; margin-left: 55px;">
                <p><h5><strong> SPECIAL DEGREE - 3 <sup>rd</sup> YEAR</strong></h5></p>

            </div>


                <p style="float: left; margin-top: 20px;">
                    <a href="create.php" class="btn btn-danger">Computer Science</a>
                </p>

              
                 <p style="float: right;  margin-top: 20px;">
                    <a href="create.php" class="btn btn-danger">Applied statisctics</a>
                </p>
               
<br><br><br><br><br><br>
                 <p style="margin-top: -30px;">
                    <a href="create.php" class="btn btn-danger"> &nbsp &nbsp &nbsp &nbsp   Physics &nbsp  &nbsp  &nbsp &nbsp &nbsp </a>
                </p>
               <br>

                 <p style="float: right; margin-top: -60px;">
                    <a href="create.php" class="btn btn-danger">  &nbsp &nbsp &nbsp  Chemistry   &nbsp  &nbsp &nbsp</a>
                </p>

<br><br>
                 <p style="margin-top: -30px;">
                    <a href="create.php" class="btn btn-danger">  &nbsp Applied Biology   &nbsp   &nbsp</a>
                </p>
               <br>

                 <p style="float: right; margin-top: -60px;">
                    <a href="create.php" class="btn btn-danger">&nbsp   &nbsp Mathematics &nbsp   &nbsp</a>
                </p>              

              
      </div> 
     </div>

          <br>

        <div class="row">

              <div style="width:30%; height:300px; color:black; margin-left: 780px; background: #e0ebeb;border: 1px solid #e0ebeb;border-radius: 10px 10px 10px 10px;padding:20px; font-weight: bold; margin-top: -335px; float: left;">


            <div  style="color:#5c5c3d ; margin-left: 55px;">
                <p><h5><strong> SPECIAL DEGREE - 4 <sup>th</sup> YEAR</strong></h5></p>

            </div>

                <p style="float: left; margin-top: 20px;">
                    <a href="create.php" class="btn btn-success">Computer Science</a>
                </p>

              
                 <p style="float: right;  margin-top: 20px;">
                    <a href="create.php" class="btn btn-success">Applied statisctics</a>
                </p>
               
<br><br><br><br><br><br>
                 <p style="margin-top: -30px;">
                    <a href="create.php" class="btn btn-success"> &nbsp &nbsp &nbsp &nbsp   Physics &nbsp  &nbsp  &nbsp &nbsp &nbsp </a>
                </p>
               <br>

                 <p style="float: right; margin-top: -60px;">
                    <a href="create.php" class="btn btn-success">  &nbsp &nbsp  &nbsp Chemistry   &nbsp  &nbsp &nbsp</a>
                </p>

<br><br>
                 <p style="margin-top: -30px;">
                    <a href="create.php" class="btn btn-success">  &nbsp Applied Biology   &nbsp   &nbsp</a>
                </p>
               <br>

                 <p style="float: right; margin-top: -60px;">
                    <a href="create.php" class="btn btn-success">&nbsp   &nbsp Mathematics &nbsp   &nbsp</a>
                </p>              

              
      </div> <!-- /container -->
     </div>

    </div>

 <br>
       <div style="width: 25%; height: 300px; color:black; margin-left:290px; margin-top: -320px; background: #e0ebeb;border: 1px solid #e0ebeb;border-radius: 10px 10px 10px 10px;padding:20px; float: left; font-weight: bold; ">
      <?php if (isset($_SESSION['success'])): ?>
    <div style="color: #5c5c3d; font-size: 10px;  font-weight: bold;">
        <h4>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
           ?>
        </h4>
    </div>

    <?php endif ?>

    <?php if (isset($_SESSION["username"])):?>
        <br><br><br><br>
    <p style="margin-left: 21px; font-size: 17px; font-family: 'calbri'">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <br>
    <p><a href="adminhome.php?logout='1'" style="color:#5c5c3d;  font-weight: bold; font-size: 20px; margin-left: 95px; text-decoration: none;">
      Logout</a></p>
     <?php endif ?>

    </div>

  </body>
</html>