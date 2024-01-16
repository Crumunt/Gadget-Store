<?php

session_start();
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include "../config/connection.php";
include "partials/header.php";

?>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "GadgetStore";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["full_name"]. " " . $row["username"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 

<?php include "partials/footer.php"; ?>