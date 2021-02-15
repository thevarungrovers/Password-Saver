<?php

include 'frontend-connect.php';

$Password_website = $_POST['Password_website'];
$Password_username = $_POST['Password_username'];
$Password_entered = $_POST['Password_entered'];


$sql = "INSERT INTO password_saver (Password_website, Password_username, Password_entered)
VALUES ('$Password_website', '$Password_username', '$Password_entered')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>