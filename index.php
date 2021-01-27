<!DOCTYPE html>
<html lang="en">



<head>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/cart.js"></script>
    <script type="text/javascript" src="js/cravingsMenu.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cravings|Menu</title>

<style>
   
</style>
</head>

<body>

   <?php include('header.html'); ?>

    <div class="top_container">
        <p class="container_name">Our menu</p>
        
    </div>

    <div class="full_div_auto">
        <p class="medium_text d"></p>
        <a class="sub ">our menu</a>
        <br>
        <a class="menu_name active_menu_name allCtrl">all</a>   
        <a class="menu_name breakfastCtrl">Breakfast</a>
            <ul>
    <li id="spoil">
      <a class="menu_name">maincourse</a>
    </li>
  </ul>
        <a class="menu_name dessertCtrl">dessert</a>

    
  </ul>

        

        <a class="menu_name drinksCtrl">salads</a>       
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for food..">
        <div class="menu" id="menu">

         <?php
         
         $servername = "localhost";
$username = "root";
$password = "";
$dbname = "cravings";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query = "SELECT * FROM menu ";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0){
    $i = 1;
    while($row = mysqli_fetch_assoc($result)){
     ?>   
   <div class="menu_item <?= $row['Category']?>">
                  <img class="menu_item_img" src="uploads/<?= $row['image']?>">
                      <p class="menu_item_name"><?= $row["Name"] ?></p>
                     <span class="price"># <?= $row["price"]?></span>
                     <i class="menu_item_ingredients"><?= $row["Details"]?> </i>
                     <p class="order add-to-cart" href="#" data-name="<?= $row['Name']?>" data-price="<?= $row['price']?>">Order</p>
                  </div>


<?php
    }
}

         
         
         ?>   
       


                <p data-toggle="modal" data-target="#cart" id="tog">
                    <i class="fa fa-shopping-cart"></i>
                    <p id="tog1">0</p>
                </p>

<div class="success_modal">
<p style = "font-size: 80px"><i class="fa fa-check-circle"></i><br>Order Confirmed </p>
</div>

<div  class="place_order_modal">
                        <form class="neat_form">
                            <input type="text" placeholder="Name" id="get_name">
                            <input type="email" placeholder="Email" id="get_email"><br>
                            <input type="tel" placeholder="Phone" id="get_phone">
                            <input type="text" placeholder="Address" id="get_address"><br>
                            <button type="submit" id="finish">Finish</button>
                        </form>
                        <p id="ordered_items"></p>
                        <br>
                        <p id="newTotal"></p>
                        <i class="fa fa-arrow-circle-left" id="goBack" title="Back to ordered items"></i>
                        </div>

                <div class="none"></div>
                    <div  class="menu_modal">
                        <p id="pos">x</p>
                        <ul id="show-cart">

                        </ul>
                        <div>You have
                            <span id="count-cart">X</span> items in your tray</div>

                    
                    <div id="not"> Total : ₦
                        <span id="total-cart"></span>
                        <br>
                        <p id="clear-cart">
                            Clear your tray </p><br>

                          <p id = "place_order" name = "clear">Place Order</p>  
                    </div>



                    

                    <?php

        if(isset($_POST['submit'])){
            $to = "obinna932@gmail.com";
            $subject = 'Order Placement';
            $txt = $_POST['message'];
            $headers = 'From:' . $_POST['email'];

            $mail_result = mail($to,$subject,$txt,$headers);
        if($mail_result == true){
        echo '<script> $(document).ready(function(){
                        $(".success").fadeIn(function(){
                                $(this).fadeOut(3000);
                                });
                            });  
                </script>';
        
        }else{
        echo '<script> $(document).ready(function(){
                        $(".error").fadeIn(function(){
                                $(this).fadeOut(3000);
                                });
                            });  
                </script>';
        

        }
        }
  ?>

                    </div>


                
        </div>
    </div>





    <script>

$(document).ready(function(){
        $("#tog").click(function (event) {
            $(".none, .menu_modal").fadeIn();
        })



        $(".none").click(function (event) {
            $(".none, .menu_modal, .place_order_modal").fadeOut();
        })


        $(".add-to-cart").click(function (event) {
            event.preventDefault();
            var name = $(this).attr("data-name");
            var price = Number($(this).attr("data-price"));
            //        mk_shoppingCart.addItemToCart(name, price, 1);
            mk_shoppingCart.addItemToCart(name, price, 1);
            displayCart();
        });

        $("#clear-cart").click(function (event) {
            mk_shoppingCart.clearCart();
            displayCart();
            //      mk_shoppingCart.saveCart();
        });
    });


        function displayCart() {
            var cartArray = mk_shoppingCart.listCart();
            var output = "";
            for (var i in cartArray) {
                output += '<li><span class = "neat">' +
                    cartArray[i].name +
                    "</span> <input type='number' class='item-count' data-name='" + cartArray[i].name + "' value='" +
                    cartArray[i].count + "'>" +
                    " x ₦" + cartArray[i].price +
                    " = " + cartArray[i].total +
                    " <span>"
                    //            +"<span style='border: 1px solid cadetblue; padding: 3px; border-radius: 5px;'>"
                    +
                    "<button "+
                    " class='plus-item' data-name='" + cartArray[i].name + "'>" +
                    " + </button>" +
                    "<span></span>" +
                    "<button "+
                    " class='subtract-item' data-name='" + cartArray[i].name + "'>" +
                    " - </button>"
                    //            +"</span>"
                    +
                    "<span></span>" +
                    "<button " +
                    " class='delete-item' data-name='" + cartArray[i].name + "'>" +
                    " X</button>" +
                    "</span>" +
                    "</li>"
            }
            $("#show-cart").html(output);
            $("#count-cart").html(mk_shoppingCart.countCart());
            $("#total-cart").html(mk_shoppingCart.totalCart());
            $("#tog1").html(mk_shoppingCart.countCart());
        }
      
        
       

        $("#show-cart").on("click", ".delete-item", function (event) {
            var name = $(this).attr("data-name");
            mk_shoppingCart.removeItemFromCartAll(name);
            displayCart();
        });

        $("#show-cart").on("click", ".subtract-item", function (event) {
            var name = $(this).attr("data-name");
            mk_shoppingCart.removeItemFromCart(name);
            displayCart();
        });

        $("#show-cart").on("click", ".plus-item", function (event) {
            var name = $(this).attr("data-name");
            mk_shoppingCart.addItemToCart(name, 0, 1);
            displayCart();
        });

        $("#show-cart").on("change", ".item-count", function (event) {
            var name = $(this).attr("data-name");
            var count = Number($(this).val());
            mk_shoppingCart.setCountForItem(name, count);
            displayCart();
        });



        displayCart();
    


function myFunction() {
        // Declare variables
        var input, filter, ul, li, a, i;
        input = document.getElementById('myInput');
        filter = input.value;
        filter = filter.toLowerCase();
        ul = document.getElementById("menu");
        li = ul.getElementsByClassName('menu_item');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByClassName("menu_item_name")[0];
            if (a.innerHTML.indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    $('#place_order').click(function(){
            doPlaceOrder();
    })

    function doPlaceOrder(){
       

          $('.menu_modal').fadeOut();  
          $('.place_order_modal').fadeIn(); 


            $(".none").click(function (event) {
            $(".none, .menu_modal").fadeOut();
        })

          var gottenItems = $("#show-cart").html();
          var gottenTotal = $("#total-cart").html()
          $('#ordered_items').html(gottenItems)
          $('#newTotal').html('Total : ₦' + gottenTotal)
          $('#ordered_items button').hide()
          $("#ordered_items input").prop("readonly", true).addClass('no_border');
        

      
    }

    $('#finish').click(function(event){
        event.preventDefault()
        var name, email, phone, address, getItems;
        name = $('#get_name').val();
        email = $('#get_email').val();
        phone = $('#get_phone').val();
        address = $('#get_address').val();
        getItems = $('#ordered_items').html();

        if(name.length < 1 || email.length < 1 || phone.length < 1 || address.length < 1 || getItems.length < 1){
            alert('Please fill in all fields')
        }else{
          $.ajax({              
            url:"php/insertToDB.php?name="+name+"&email="+email+"&phone="+phone+"&address="+address+"&item="+getItems,
            success:function(data){
                // console.log(data)
                //  alert('successful')                                      
                // $(".place_order_modal").fadeout();          
                alert("Successful");   
                mk_shoppingCart.clearCart();             
                location.reload();
                
            }
        })
     
        }
    })

    $('#goBack').click(function(){
        $('.menu_modal').fadeIn();  
          $('.place_order_modal').fadeOut();  
    })

    
    
</script>


<?php include('footer.html')?>



</body>



</html>