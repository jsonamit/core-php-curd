<?php
include 'connection.php';
$id =$_GET['id'];
$query = "DELETE FROM registration WHERE id=$id LIMIT 1";

if ($conn->query($query) === TRUE) {
    echo "New record deleted successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}


function update(){
    $name=$_GET['name'];
    echo $name;
}
header('Location: retrive.php');
$conn->close();
?>