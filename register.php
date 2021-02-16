<?php

include 'frontend-connect.php';

$input_email = $_POST['input_email'];
$input_pass = $_POST['input_pass'];
$input_name = $_POST['input_name'];

// SQL QUERIES  
// sql to create table (1)
$sql = "CREATE TABLE `password_manager`.`$input_email` ( `Password_no` INT(30) NOT NULL AUTO_INCREMENT , `Password_website` VARCHAR(30) NULL , `Password_username` VARCHAR(30) NULL , `Password_entered` VARCHAR(30) NULL , PRIMARY KEY (`Password_no`)) ENGINE = InnoDB;";

// sql to add details (2)
// $sql. = "INSERT INTO user_details (input_name, input_email, input_pass) VALUES ($input_name, $input_email, $input_pass);";

$sql .= "INSERT INTO `user_details`(`user_no`, `input_name`, `input_email`, `input_pass`) VALUES ($input_name,$input_email,$input_pass)";


if (!$conn->multi_query($sql)) {
  echo "Multi query failed: (" . $conn->errno . ") " . $conn->error;
}

do {
  if ($res = $conn->store_result()) {
      var_dump($res->fetch_all(MYSQLI_ASSOC));
      $res->free();
  }
} while ($conn->more_results() && $conn->next_result());


// if ($conn->query($sql) === TRUE) {
//   echo "Table $input_email created successfully";
// } else {
//   echo "Error creating table: " . $conn->error;
// }

$conn->close();


?>

