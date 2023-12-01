<?php
$servername="localhost";
$username="23mca002";
$password="2703";
$dbname="23mca002";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
$sql="INSERT INTO student(name,course,age)VALUES('$_POST[name]','$_POST[course]','$_POST[age]')";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>