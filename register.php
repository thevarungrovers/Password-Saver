<?php

include 'frontend-connect.php';

$input_email = $_POST['input_email'];
$input_pass = $_POST['input_pass'];
$input_name = $_POST['input_name'];

// sql to create table
$sql = "CREATE TABLE `password_manager`.`$input_email` ( `Password_no` INT(30) NOT NULL AUTO_INCREMENT , `Password_website` VARCHAR(30) NULL , `Password_username` VARCHAR(30) NULL , `Password_entered` VARCHAR(30) NULL , PRIMARY KEY (`Password_no`)) ENGINE = InnoDB;";


if ($conn->query($sql) === TRUE) {
  echo "Table $input_email created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();


?>

