<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testphp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
	//echo "Connection created successfully";
}
echo "<br />";

?>