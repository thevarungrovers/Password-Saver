<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "password_manager";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 	Password_no, Password_website, Password_username, Password_entered FROM password_saver";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	
	echo "<table>".
      "<tr>".
      "<th>S No.</th>".
      "<th>Website</th>".
      "<th>username or Email</th>".
      "<th>Password</th>".
      "</tr>" ."<br>";

  while($row = $result->fetch_assoc()) {
    echo  "<tr>".
          "<td>".$row["Password_no"]."</td>".
          "<td>".$row["Password_website"]."</td>".
          "<td>".$row["Password_username"]."</td>".
          "<td>".$row["Password_entered"]."</td>".
          "</tr>";
          // $row["Password_no"] . $row["Password_website"] . $row["Password_username"].  $row["Password_entered"]. "<br>";
  }
  echo "</table>";
}
 else {
  echo "0 results";
}

$conn->close();
?>