<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE `registration`.`students` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `reg_no` VARCHAR(50) NOT NULL ,
			`email` VARCHAR(50) NOT NULL , `address` VARCHAR(100) NOT NULL , `faculty` VARCHAR(50) NOT NULL , `gender` TEXT NOT NULL , `field` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`) , UNIQUE (`reg_no`) , UNIQUE (`email`)) ENGINE = InnoDB";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 