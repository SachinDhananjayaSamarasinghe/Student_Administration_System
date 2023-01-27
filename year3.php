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
             <legend><h3>Year 3 Courses</h3></legend>   
            </div>

            <br>

     <div style="font-family:Lato,sans-serif; font-style: italic; line-height: 1.3; font-size: 15px; text-align: center; color: #757575; ">
          <i>You must select 3 main courses including Mathematics I or Biology.</i>
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
	<form action="year3.inc.php" method="POST">
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
				<td>05(sem-1) , 04(sem-2)</td>
				<td>01 & 02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="mi" value="Mathematics I"></td>
			</tr>

			<tr>

				<td>Mathematics II</td>
				<td>&nbsp &nbsp &nbsp Main</td>
				<td>05(sem-1) , 04(sem-2)</td>
				<td>01 & 02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="mii" value="Mathematics II"></td>
			</tr>


			<tr>

				<td>Biology *</td>
				<td>&nbsp &nbsp &nbsp Main</td>
				<td>05(sem-1) , 04(sem-2)</td>
				<td>01 & 02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="bio" value="Biology"></td>
			</tr>

			<tr>

				<td>Computer Science</td>
				<td>&nbsp &nbsp &nbsp Main</td>
				<td>05(sem-1) , 04(sem-2)</td>
				<td>01 & 02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="cs" value="Computer Science"></td>
			</tr>

			<tr>

				<td>Earth Science</td>
				<td>&nbsp &nbsp &nbsp Main</td>
				<td>05(sem-1) , 04(sem-2)</td>
				<td>01 & 02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="es" value=" Earth Science"></td>
			</tr>


			<tr>

				<td>Chemistry</td>
				<td>&nbsp &nbsp &nbsp Main</td>
				<td>05(sem-1) , 04(sem-2)</td>
				<td>01 & 02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="chem" value="Chemistry"></td>
			</tr>


			<tr>

				<td>Physics</td>
				<td>&nbsp &nbsp &nbsp Main</td>
				<td>05(sem-1) , 04(sem-2)</td>
				<td>01 & 02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="phy" value="Physics"></td>
			</tr>


			<tr>

				<td> Principles of Economics</td>
				<td>&nbsp &nbsp Elective</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 02</td>
				<td>&nbsp &nbsp  01</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="poe" value="Principles of Economics"></td>
			</tr>

			<tr>

				<td> Leardership and Teamwork</td>
				<td>&nbsp &nbsp Elective</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 01</td>
				<td>&nbsp &nbsp  01</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="lat" value="Leardership and Teamwork"></td>
			</tr>

			<tr>

				<td> Principles of Managements</td>
				<td>&nbsp &nbsp Elective</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 02</td>
				<td>&nbsp &nbsp  01</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="pom" value="Principles of Managements"></td>
			</tr>

			<tr>

				<td> Research Methodology</td>
				<td>&nbsp &nbsp Elective</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 02</td>
				<td>&nbsp &nbsp  01</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="rm" value="Research Methodology"></td>
			</tr>


			<tr>

				<td> Career Development</td>
				<td>&nbsp &nbsp Auxilary</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 01</td>
				<td>&nbsp &nbsp  01</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="cd" value="Career Development"></td>
			</tr>

			<tr>

				<td> Project Analysis</td>
				<td>&nbsp &nbsp Elective</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 02</td>
				<td>&nbsp &nbsp  02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="pa" value="Project Analysis"></td>
			</tr>

			<tr>

				<td> Bio Ethics</td>
				<td>&nbsp &nbsp Elective</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 01</td>
				<td>&nbsp &nbsp  02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="be" value="Bio Ethics"></td>
			</tr>


			<tr>

				<td>Peace and Conflict Management</td>
				<td>&nbsp &nbsp Elective</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 02</td>
				<td>&nbsp &nbsp  02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="pcm" value="Peace and Conflict Management"></td>
			</tr>


			<tr>

				<td>Human Resource Management</td>
				<td>&nbsp &nbsp Elective</td>
				<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 02</td>
				<td>&nbsp &nbsp  02</td>
				<td>&nbsp &nbsp &nbsp <input type="checkbox" name="hrm" value="Human Resource Management"></td>
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
		<p style="font-style: italic;"><input id="agree" type="radio"  name="verify" value="Year 2"  onclick="regi()" checked> I Accept</p><br/>
		<p style="font-style: italic;"><input id="nagree" type="radio" name="verify" value="Year 2" onclick="regi()" > I do not Accept </p>
<br><br>
        <p style="text-align: left;"><button id="submit" type="submit" class="btn btn-success">Register</button></p>
        <a href="test.php" class="btn">&nbsp &nbsp Back &nbsp &nbsp</a>
<br><br>       
                         
    </div>

	</form>
  </div>
</div>

</body>
</html>