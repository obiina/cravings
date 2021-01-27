<?php

$_GET['id'] = $id;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cravings";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE FROM ordered_items WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Deleted Scuccessfully')</script>";
    header( "Location: ../Dashboard.php" );

} else {
    echo "<script>console.log('Error: '" + $sql +" <br> "+$conn->error + ")</script>";
}
?>