<?php //include('server.php'); 

//if(empty($_SESSION['username'])){
 // header('location: login.php');
//}

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
             <legend><h3>Student Registration Details</h3></legend>   
            </div>

            <br>
        <!--      <div style="width: 35%;color:black; margin-left:-15px; margin-top: -30px; background: #e0ebeb;border: 1px solid #e0ebeb;border-radius: 10px 10px 10px 10px;padding:20px; float: left; font-weight: bold; ">
      <?php if (isset($_SESSION['success'])): ?>
    <div style="color: #5c5c3d; margin-bottom: 20px; font-size: 10px; font-weight: bold;">
        <h3>
          <?php
          echo $_SESSION['success'];
          unset($_SESSION['success']);
           ?>
        </h3>
    </div>
    <?php endif ?>

    <?php if (isset($_SESSION["username"])):?>
    <p style="font-size: 19px; font-family: 'calbri'">Welcome <?php echo $_SESSION['username']; ?></p>
    <p><a href="admin.php?logout='1'" style="color:#5c5c3d;  font-weight: bold; text-decoration: none;">Logout</a></p>
     <?php endif ?>

    </div>-->

            <div class="row">
              <p>
                    <a href="create.php" class="btn btn-info">Create</a> 

      <!--  <?php include('search.php'); 

        ?> -->
                </p>
                <br>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Registration Number</th>
                      <th>Address</th>
                      <th>Faculty</th>
                      <th>Gender</th>
                      <th>Field of Interest</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM students ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['reg_no'] . '</td>';
                            echo '<td>'. $row['address'] . '</td>';
                            echo '<td>'. $row['faculty'] . '</td>';
                            echo '<td>'. $row['gender'] . '</td>';
                            echo '<td>'. $row['field'] . '</td>';
                             echo '<td width=250>';
                                echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a>';
                                echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
        <div class="form-actions" style="margin-top: 220px;">
              <a class="btn" href="adminhome.php" style="margin-left: 150px;">&nbsp &nbsp Back &nbsp &nbsp</a>
      </div>
    </div> <!-- /container -->

  </body>
</html>