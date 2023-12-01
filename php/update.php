<?php
$servername = "localhost";
$username = "23mca001";
$password = "2785";
$dbname = "23mca001";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  $name =  $_REQUEST['name'];
  $course =  $_REQUEST['course'];
  $age =  $_REQUEST['age'];
$sql = "UPDATE student SET Name='$name', Course='$course',Age='$age' WHERE Id='$_POST[id]'";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>