<?php

include 'frontend-connect.php';

$sql = "SELECT 	Password_website, Password_username, Password_entered FROM password_saver";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
	
	echo "<table>".
      "<tr>".
      "<th>Website</th>".
      "<th>username or Email</th>".
      "<th>Password</th>".
      "</tr>" ."<br>";

  while($row = $result->fetch_assoc()) {
    echo  "<tr>".
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