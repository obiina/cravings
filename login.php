<!DOCTYPE html>
<html lang="en">
  <?php
        //include'loginScript.php'
       // if(isset($_SESSION['cravingsUser'])){
       //     session_destroy();
      //  }
        ?>
<head>
<?php include('header.html'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/menu.css">
    <title>Cravings|Login</title>
</head>

<body>    
    <div class="one">
     <form action="" method="POST" style = "height: 593px;">
        <div class="loginForm">           
            <p style = "float: left;font-size: 36px;color: #fff;margin-left: 18px;margin-bottom: 2px;">Login</p> 
            <input type="text" name = "userName" placeholder="Username" id="uname">
            <input type="password" name = "passWord" placeholder="Password" id="pwd">
            <button type="submit" name="submit" id = "login">Login</button>                    
        </div>
        </form>
    </div>
</body>

<script src="js/jquery.min.js"></script>

<?php

$conn = mysqli_connect("localhost","root","", "cravings");

if(isset($_POST['submit'])) {

	$uid = $_POST['userName'];
	$pwd = $_POST['passWord'];
	

	$sql = "SELECT * FROM cravings_admin WHERE username = '$uid' AND password = '$pwd'";
    $result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	
	if (isset($result)) {
	if(!$row){

        			echo "<script>alert('Login unsuccessful.')</script>";
	// $_SESSION['id'] = $row['id'];
}else{

                session_start();
				$_SESSION['id'] = session_id();
			header("Location: Dashboard.php");
			echo "<script>alert('Login successful')</script>";	

}
	}
}
?>
</html>