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
$sql = "CREATE TABLE `registration`.`year2` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `sub1` VARCHAR(255) NULL , `sub2` VARCHAR(255) NULL , `sub3` VARCHAR(255) NULL , `sub4` VARCHAR(255) NULL , `sub5` VARCHAR(255) NULL , `sub6` VARCHAR(255) NULL , `sub7` VARCHAR(255) NULL , `sub8` VARCHAR(255) NULL , `sub9` VARCHAR(255) NULL , `sub10` VARCHAR(255) NULL , `sub11` VARCHAR(255) NULL , `sub12` VARCHAR(255) NULL , `sub13` VARCHAR(255) NULL , `sub14` VARCHAR(255) NULL , `sub15` VARCHAR(255) NULL , `sub16` VARCHAR(255) NULL , `email` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`), UNIQUE (`email`)) ENGINE = InnoDB ";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 
