<?php  
echo "<script>alert('Starting script')</script>";
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


$name = $_GET['name'];
$address = $_GET['address'];
$phone = $_GET['phone'];
$items = $_GET['item'];
$getEmail = $_GET['email'];

$sql = "INSERT INTO ordered_items VALUES ('','$name', '$getEmail','$phone','$address', '$items')";
// $result = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Inserted Scuccessfully')</script>";
} else {
    echo "<script>console.log('Error: '" + $sql +" <br> "+$conn->error + ")</script>";
}   

$conn->close();
?>