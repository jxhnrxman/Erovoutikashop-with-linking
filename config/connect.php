<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_shop";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn1 = mysqli_connect($servername, $username, $password, $dbname);
$conn2 = mysqli_connect($servername, $username, $password, $dbname);

//Check Connection
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>