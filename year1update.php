<?php

error_reporting(E_PARSE | E_ERROR);

    require 'database.php';
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: year1info.php");
    }
     
    if ( !empty($_POST)) {
       
 // keep track post values
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

 // validate input
        $valid = true;
            
// update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE year1  set sub1 = ?, sub2 = ?, sub3 = ?,  sub4 = ?, sub5 = ?, sub6 =?, sub7 = ?, sub8 = ?, sub9 = ?, sub10 = ?, sub11 =?, sub12 = ?, sub13 = ?, sub14 =?, sub15 = ?, sub16 = ?, sub17 = ?, sub18 = ?, email =? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($mi,$mii,$bio,$cs,$es,$chem,$phy,$mfb,$bfm,$is,$cmi,$iti,$vb,$ei,$mfbii,$bes,$sm,$eii,$email,$id));
            Database::disconnect();
            echo "<b><h4>Course registration updated successfully.</h4></b>";
            header('Refresh:3;url=year1info.php');
         //   header("Location: year1info.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM year1 where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
    $mi = $data['mi'];
    $mii = $data['mii'];
    $bio = $data['bio'];
    $cs = $data['cs'];
    $es = $data['es'];
    $chem = $data['chem'];
    $phy = $data['phy'];
    $mfb = $data['mfb'];
    $bfm = $data['bfm'];
    $is = $data['is'];
    $cmi = $data['cmi'];
    $iti = $data['iti'];
    $vb = $data['vb'];
    $ei = $data['ei'];
    $mfbii = $data['mfbii'];
    $bes = $data['bes'];
    $sm = $data['sm'];
    $eii = $data['eii'];
    $email = $data['email'];
        Database::disconnect();
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        function regi(){
            if (document.getElementById('nagree').checked){
                document.getElementById('submit').style.display = 'none';
            }
   
        if (document.getElementById('agree').checked){
                document.getElementById('submit').style.display = 'block';
            }
        }

    </script>

</head>
<body>
    <div class="container">
            <div class="row">
             <legend><h3>Year 1 Courses - Admin Update</h3></legend>   
            </div>

            <br>

     <div style="font-family:Lato,sans-serif; font-style: italic; line-height: 1.3; font-size: 15px; text-align: center; color: #757575; ">
          <i>You must select 4 main courses including Mathematics I or Biology.</i>
          <br><br>
          <i>All the ** marked courses are compulsory for Physical Science students.</i> 
          <br><br>
          <i>All the * marked courses are compulsory for Biological Science students.</i> 
          <br><br>
          <i>Course Mathematics II is only available for the Physical Science students.</i>
          <br><br>
          <i>Elective courses must be select accordingly, in order to complete 30-31 credits per semester.</i>
          <br><br>
          <i>At least C pass must be obtain for auxiliary courses though their results will not considered for GPA calculation.</i>

     </div>
     <br><br>

            <div class="row">
 
            <br>
    <form action="year1update.php?id=<?php echo $id?>" method="post">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Course Name</th>
                <th>Course Type</th>
                <th>Credit Value</th>
                <th>Semester</th>
                <th>Selection</th>
            </tr>
            </thead>

            <tr >
                <td>Mathematics I **</td>
                <td>&nbsp &nbsp &nbsp Main</td>
                <td> &nbsp &nbsp &nbsp &nbsp 04</td>
                <td>01 & 02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="mi" value="Mathematics I"></td>
            </tr>

            <tr>

                <td>Mathematics II</td>
                <td>&nbsp &nbsp &nbsp Main</td>
                <td> &nbsp &nbsp &nbsp &nbsp 03</td>
                <td>01 & 02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="mii" value="Mathematics II"></td>
            </tr>


            <tr>

                <td>Biology *</td>
                <td>&nbsp &nbsp &nbsp Main</td>
                <td>&nbsp &nbsp &nbsp &nbsp 04</td>
                <td>01 & 02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="bio" value="Biology"></td>
            </tr>

            <tr>

                <td>Computer Science</td>
                <td>&nbsp &nbsp &nbsp Main</td>
                <td>&nbsp &nbsp &nbsp &nbsp 03</td>
                <td>01 & 02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="cs" value="Computer Science"></td>
            </tr>

            <tr>

                <td>Earth Science</td>
                <td>&nbsp &nbsp &nbsp Main</td>
                <td>&nbsp &nbsp &nbsp &nbsp 03</td>
                <td>01 & 02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="es" value=" Earth Science"></td>
            </tr>


            <tr>

                <td>Chemistry</td>
                <td>&nbsp &nbsp &nbsp Main</td>
                <td>&nbsp &nbsp &nbsp &nbsp 03</td>
                <td>01 & 02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="chem" value="Chemistry"></td>
            </tr>


            <tr>

                <td>Physics</td>
                <td>&nbsp &nbsp &nbsp Main</td>
                <td>&nbsp &nbsp &nbsp &nbsp 03</td>
                <td>01 & 02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="phy" value="Physics"></td>
            </tr>


            <tr>

                <td>Mathematics for Biology I *</td>
                <td>Compulsory</td>
                <td>&nbsp &nbsp &nbsp &nbsp 01</td>
                <td>&nbsp &nbsp  01</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="mfb" value="Mathematics for Biology I"></td>
            </tr>

            <tr>

                <td> Biology for Mathematics **</td>
                <td>Compulsory</td>
                <td>&nbsp &nbsp &nbsp &nbsp 01</td>
                <td>&nbsp &nbsp  01</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="bfm" value="Biology for Mathematics"></td>
            </tr>

            <tr>

                <td> Introductory Statistics</td>
                <td>&nbsp &nbsp Elective</td>
                <td>&nbsp &nbsp &nbsp &nbsp 02</td>
                <td>&nbsp &nbsp  01</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="is" value="Introductory Statistics"></td>
            </tr>

            <tr>

                <td> Computational Mathematics I</td>
                <td>&nbsp &nbsp Elective</td>
                <td>&nbsp &nbsp &nbsp &nbsp 01</td>
                <td>&nbsp &nbsp  01</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="cmi" value="Computational Mathematics I"></td>
            </tr>


            <tr>

                <td> Information Technology I</td>
                <td>&nbsp &nbsp Elective</td>
                <td>&nbsp &nbsp &nbsp &nbsp 01</td>
                <td>&nbsp &nbsp  01</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="iti" value="Information Technology I"></td>
            </tr>

            <tr>

                <td> Visual Basic</td>
                <td>&nbsp &nbsp Elective</td>
                <td>&nbsp &nbsp &nbsp &nbsp 02</td>
                <td>&nbsp &nbsp  01</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="vb" value="Visual Basic"></td>
            </tr>

            <tr>

                <td> English I</td>
                <td>&nbsp &nbsp Auxilary</td>
                <td>&nbsp &nbsp &nbsp &nbsp 01</td>
                <td>&nbsp &nbsp  01</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="ei" value="English I"></td>
            </tr>


            <tr>

                <td>Mathematics for Biology II *</td>
                <td>Compulsory</td>
                <td>&nbsp &nbsp &nbsp &nbsp 01</td>
                <td>&nbsp &nbsp  02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="mfbii" value="Mathematics for Biology II"></td>
            </tr>


            <tr>

                <td>Basic Environmental Science **</td>
                <td>Compulsory</td>
                <td>&nbsp &nbsp &nbsp &nbsp 01</td>
                <td>&nbsp &nbsp  02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="bes" value="Basic Environmental Science"></td>
            </tr>


            <tr>

                <td>Stress Management</td>
                <td>&nbsp &nbsp Elective</td>
                <td>&nbsp &nbsp &nbsp &nbsp 01</td>
                <td>&nbsp &nbsp  02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="sm" value="Stress Management"></td>
            </tr>

            <tr>

                <td>English II</td>
                <td>&nbsp &nbsp Auxiliary</td>
                <td>&nbsp &nbsp &nbsp &nbsp 01</td>
                <td>&nbsp &nbsp  02</td>
                <td>&nbsp &nbsp &nbsp <input type="checkbox" name="eii" value="English II"></td>
            </tr>


        </table>
        <br>

    <div  class="form-actions" style="font-family:Lato,sans-serif; line-height: 1.0; font-size: 12px; text-align: left; color: #757575;">
        <i style=" font-style: italic;">Please verify that this is your activity in this student account by enterining the email you provided  in the registration.</i>
<br><br>
<i> E-mail  &nbsp:  &nbsp   &nbsp </i><i><input type="email" name="email" placeholder="Your email here..." required style="margin-top: 8px;"></i>
        <br><br><br>
        <i style=" font-style: italic;">Please note that onces you have registered for the courses, its not allowed to change them.</i>
        <br><br><br>
        <p style="font-style: italic;"><input id="agree" type="radio"  name="verify" value="Year 1"  onclick="regi()" checked> I Accept</p><br/>
        <p style="font-style: italic;"><input id="nagree" type="radio" name="verify" value="Year 1" onclick="regi()" > I do not Accept </p>
<br><br>
        <p style="text-align: left;"><button id="submit" type="submit" class="btn btn-success">Register</button></p>
        <a href="year1info.php" class="btn">&nbsp &nbsp Back &nbsp &nbsp</a>
<br><br>       
                         
    </div>

    </form>
  </div>
</div>

</body>
</html>