<?php 

$hostname = "localhost";
$database = "vacancies";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	//echo "Connected successfully to database<br/>";
}

?>