<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <script type="text/javascript" src="js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/menu.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/say.js"></script>
    <script type="text/javascript" src="js/cravings.js"></script>
    <script type="text/javascript" src="js/cravingsSlide.js"></script>
    
    <title>Document</title>
</head>
<body>
<nav class= "dashboard">
    <a class="site_title" href="index.php">Cravings</a>
    <a href="index.php">Logout</a>

    <div class="bars-container" onclick="toggle(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

</nav>

<div class="sideBar1">
    <a class="dashLink" href="#" style = "" id = "dish">Add Dish</a>
    <a class="dashLink" href="#" style = "border-bottom: 2px solid #fff;" id = orders>Orders</a>
</div>
<div class="add_dish">
<form action="php/menu.php" method="post" enctype="multipart/form-data">
        <div class="insertform">           
            <p style = "float: left;font-size: 36px;color: #32512;margin-left: 18px;margin-bottom: 2px;">Add a Dish</p> 
            <input type="text" name ="food" placeholder="Name" id="uname">
            <input type="text" name ="details" placeholder="Details" id="uname">
            <select id="category" placeholder="select category" name = "category">
  <option value="breakfast">BreakFast</option>
  <option value="maincourse">Maincourse</option>
  <option value="Desert">Desert</option>
  <option value="sides">Sides</option>
</select>
            <input type="text" name = "price" placeholder="Price" id="uname">
            <input type="file" name="foodimage" id="uname" placeholder="Image">
            <input type="submit" name="submit" id = "login" value="Submit">
        </div>
        </form>
</div>


<div class="view_orders" style = "display:none;">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cravings";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM ordered_items ORDER BY id DESC";
$result = mysqli_query($conn, $query);

?>



<div id="table_results">    
<?php
echo "<table class = 'orders'>
<tr>

<th>NO.</th>
<th>Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Address</th>
<th>Items</th>
<th>Action</th>
</tr>



";
if (mysqli_num_rows($result) > 0){
$i = 1;
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
<td class = hide><?$row['id']; ?></td>
<td> <?= $i++ ?></td>
<td><?= $row["name"]; ?></td>
<td><?= $row["email"]; ?></td>
<td><?= $row["phone"]; ?></td>
<td><?= $row["address"]; ?></td>
<td style = "width:250px;"><?= $row["items"]; ?></td>
<td><a href="delete.php/<?= $row['id']?>" style = "text-decoration: none;padding: 6px;border: 1px solid;color: #7a7a7a;border-radius: 5px;background: #fff;">Delete</a></td>

</tr>
<?php
}


} else {
    echo "0 results";
}

echo "</table>";
?>







</div>


<script>

$('.booking').click(function(){
$('#customer').css("display", "none");

})


</script>


</div>

<script>
      $("#dish").click(function (event) {
           $(".view_orders").fadeOut();
           $(".add_dish").fadeIn();
        })
        $("#orders").click(function (event) {
           $(".add_dish").fadeOut();
           $(".view_orders").fadeIn();
        })

</script>
<style>

li {
    border: none;
    list-style: none;
    padding-top: 12px;
    padding: 1px 40px !important;
    width: 100%;
    text-align: left;
}
input.item-count.no_border {
    background: transparent;
    border: none;
    color: #fff;
}
th {
    text-align: center;
    width: 44px;
    border-right: 1px solid;
    padding: 8px;
}
tr {
    height: 50px;
}
td {
    padding: 9px;
    border-top: 1px solid;
    border-right: 1px solid;
}
table{
    margin-bottom: 10px;
    border-bottom: 1px solid #fff;
}
</style>

</body>
</html>