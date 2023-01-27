<?php
include_once 'conn.inc.php';

?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link   href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title></title>

	<!--
		<style type="text/css">
		table{
			border-collapse: collapse;
			width: 78%;
			font-size: 17pt;
			margin-top:none;
			text-align: center;
		}
		table,th,td{
			border: 1px solid rgb(192,192,192);
		}
		th{
			background: rgb(255,255,255);
			color: black;
		}
		tr:nth-child(odd){
			background: rgba(192,192,192,.2)
		}

		h2{
			text-align: center;
			font-family: Arial;
			font-size: 25px;
		}
	</style>

-->

</head>
<body>
	<div class="container">
	<legend><h3> 1 <sup> st </sup> Year Course Registration Details </h3></legend>
	
	<div>
       <a href="year1admin.php" class="btn btn-info">Create</a> 
   </div>
   <br>
	<center>
		<table  class="table table-hover">

<thead>
	<tr><th>Name</th><th></th><th>Registration No</th><th></th><th></th><th></th><th>Registered Courses</th><th>Action</th></tr>
</thead>	
			
	
<?php
$sql="SELECT * FROM students INNER JOIN year1 ON students.email = year1.email";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){
	while($row=mysqli_fetch_assoc($result)){
		echo'<tr>';
		echo'<td>'. $row['name'] .'</td>';
		echo'<td>'."\n". '</td>';
	    echo'<td>'. $row['reg_no'] .'</td>';
	    echo'<td>'."\n". '</td>';
	    echo'<td>'."\n". '</td>';
	    echo'<td>'."\n". '</td>'; 
		echo'<td>'. $row['sub1'] ."&nbsp &nbsp". $row['sub2'] ."&nbsp &nbsp". $row['sub3'] ."&nbsp &nbsp". $row['sub4'] ."&nbsp &nbsp". $row['sub5'] ."&nbsp &nbsp". $row['sub6'] ."&nbsp &nbsp". $row['sub7'] ."&nbsp &nbsp". $row['sub8'] ."&nbsp &nbsp". $row['sub9'] ."&nbsp &nbsp". $row['sub10'] ."&nbsp &nbsp". $row['sub11'] ."&nbsp &nbsp". $row['sub12'] ."&nbsp &nbsp". $row['sub13'] ."&nbsp &nbsp". $row['sub14'] ."&nbsp &nbsp". $row['sub15'] ."&nbsp &nbsp". $row['sub16'] ."&nbsp &nbsp". $row['sub17'] ."&nbsp &nbsp". $row['sub18'] .
		'</td>';

	//	echo'<td>'. $row['sub2'] .'</td>';
	//	echo'<td>'. $row['sub3'] .'</td>';
	//	echo'<td>'. $row['sub4'] .'</td>';
	//	echo'<td>'. $row['sub5'] .'</td>';
	//	echo'<td>'. $row['sub6'] .'</td>';
	//	echo'<td>'. $row['sub7'] .'</td>';
		echo '<td width=250>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="year1update.php?id='.$row['id'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="year1delete.php?id='.$row['id'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
	}
}
?>
	</table>
	</center>
	<div class="form-actions" style="margin-top: 300px;">
              <a class="btn" href="adminhome.php" style="margin-left: 150px;">&nbsp &nbsp Back &nbsp &nbsp</a>
      </div>
  </div>
</body>
</html>
