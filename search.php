<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<input type="search" name="keyword" placeholder="Keyword" style="margin-left: 870px; margin-top: -50px;">
		<input  class="btn btn-search" type="submit" name="searchbtn" value="Search" style="margin-top: -60px;">
		
	</form>
<p style="text-align: right;">
<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'registration';

	$conn = mysqli_connect($servername,$username,$password,$database) or die();

	/*if ($conn) {
		echo "Connected tho the database successfully";
	}*/

	if (isset($_POST['searchbtn'])) {
		$keyword = $_POST['keyword'];
		$sql = " SELECT * FROM students WHERE name LIKE '%$keyword%'";
		$query = mysqli_query($conn,$sql);

		if (mysqli_num_rows($query)<1) {
			echo "Sorry, We did not found any results for your search..!!";
		}else{
			while ($fetch = mysqli_fetch_assoc($query)) {
				$id = $fetch['id'];
				$name = $fetch['name'];

				echo $id." - " .$name."<br>";
			}
		}
	}

?>
</p>

</body>
</html>