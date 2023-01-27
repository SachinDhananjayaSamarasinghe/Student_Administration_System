<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: admin.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM students where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
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
                     <legend><h3>Student Details Sheet</h3></legend>
                    </div>
                   <br> 
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label" style="font-family:'calbri'; color: #757575; ">Name :</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['name'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" style="font-family:'calbri'; color: #757575; ">Registration Number :</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['reg_no'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" style="font-family:'calbri'; color: #757575; ">E-mail :</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['email'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" style="font-family:'calbri'; color: #757575; ">Address :</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['address'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" style="font-family:'calbri'; color: #757575; ">Faculty :</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['faculty'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" style="font-family:'calbri'; color: #757575; ">Gender :</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['gender'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" style="font-family:'calbri'; color: #757575; ">Field of Interest :</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['field'];?>
                            </label>
                        </div>
                      </div>
                      <br>
                        <div class="form-actions">
                          <a class="btn" href="admin.php">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>