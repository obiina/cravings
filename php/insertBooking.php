<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cravings";
/*
$servername = "localhost";
$username = "id3502491_ordered_items";
$password = "cravings";
$dbname = "id3502491_cravings";
*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$FirstName = $_GET['first_name'];
$LastName = $_GET['last_name'];
$Email = $_GET['email'];
$Phone = $_GET['phone'];
$People = $_GET['people'];
$Event = $_GET['event'];
$Date = $_GET['date'];
$Time = $_GET['time'];

$sql = "INSERT INTO booking_table VALUES ('','$FirstName', '$LastName', '$Email','$Phone','$People','$Event', '$Date', '$Time')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "<script>console.log('Error: '" + $sql +" <br> "+$conn->error + ")</script>";
}

$conn->close();
?>