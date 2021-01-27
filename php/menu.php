<?php

    
    

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cravings";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    if(isset($_POST['submit'])){
        $foodname = $_POST['food'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $target = "../uploads/";
    $imagename = $target . basename($_FILES["foodimage"]["name"]);
    $imageFileType = strtolower(pathinfo($imagename,PATHINFO_EXTENSION));
    
  if (move_uploaded_file($_FILES["foodimage"]["tmp_name"], $imagename)) {
        $sql = "INSERT INTO menu VALUES ('', '$foodname','$details','$category','$price','$imagename')";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Inserted Successfully')</script>";
            header( "Location: ../Dashboard.php" );
        } else {
            echo "<script>console.log('Error: '" + $sql +" <br> "+$conn->error + ")</script>";
        }
        
        $conn->close();        


}else{
    echo("error");
}


    }

?>