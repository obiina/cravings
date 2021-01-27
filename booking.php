<html>

<head>
    <title>Cravings</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/cravings.js"></script>
    <script type="text/javascript" src="js/cravingsSlide.js"></script>
    <script type="text/javascript" src="js/cravingsBooking.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
   <?php include('header.html'); ?>
   
    <div class="carousel">

        <div class="carousel-one" id="carousel-one">
            <div class="tint"></div>
        </div>

        <div class="carousel-one" id="carousel-two">
            <div class="tint"></div>
        </div>

        <div class="booking_form">
            <p class="text">book an event now</p>
            <form>
                <input type="text" name="" id="first_name" placeholder="First Name" class="short">
                <input type="text" name="" id="last_name" placeholder="Last Name" class="short">
                <br>
                <input type="email" name="" id="email" placeholder="Email" required>
                <br>
                <input type="tel" name="" id="phone" placeholder="Phone" class="short">
                <select class="table_select short" id="people">
                    <option value="1">1 person</option>
                    <option value="2" selected="">2 people</option>
                    <option value="3">3 people</option>
                    <option value="4">4 people</option>
                    <option value="5">5 people</option>
                    <option value="6">6 people</option>
                    <option value="7">7 people</option>
                    <option value="8">8 people</option>
                    <option value="9">9 people</option>
                    <option value="10">10 people</option>
                    <option value="11">11 people</option>
                    <option value="12">12 people</option>
                    <option value="13">13 or more</option>
                </select>
                <br>
                <select class="table_select" id="event">
                    <option value="">Select Event</option>
                    <option value="Wedding">Wedding</option>
                    <option value="BirthDay">BirthDay</option>
                    <option value="Party">Party</option>

                </select>
                <br>
                <input type="date" name="" id="date" class="short">
                <input type="time" name="" id="time" class="short">
                <br>
                <input type="submit" name="" id="" value="Book Now" class="button submitBooking" id="submitBooking">

            </form>
        </div>


    </div>


<?php include'footer.html'?>

</body>



<style>
    .tint {
        opacity: 0.7;
    }


    .carousel {
        min-height: 100vh;
        height: 730px;
    }

    .table_select {
        margin: 12px 15px !important;
    }
</style>

</html>