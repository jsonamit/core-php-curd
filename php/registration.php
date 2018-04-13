<?php

include 'connection.php';


$name = $_GET['name'];
$address = $_GET['address'];
$email = $_GET['email'];
$city = $_GET['city'];

$sql = "INSERT INTO registration (name, address,email, city)
VALUES ('$name', '$address','$email', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header('Location: retrive.php');
$conn->close();

?>