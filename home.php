<html>

<head>
    <title>Cravings</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/say.js"></script>
    <script type="text/javascript" src="js/cravings.js"></script>
    <script type="text/javascript" src="js/cravingsSlide.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include('header.html'); ?>

    <div class="carousel">
        <p class="left-btn">
            <</p>
                <p class="right-btn">></p>

                <div class="carousel-one" id="carousel-one">
                    <div class="tint"></div>
                    <a class="carousel-title">absolute Comfort</a>
                    <br />
                    <p class="carousel-text">Search no more</p>
                    <a class="btnGetOne darken-4" href="Categories.aspx?type=FindJob">FIND A JOB</a>
                    <!-- <img src="img/Instagram.png" class="carousel-image" /> -->
                </div>

                <div class="carousel-one" id="carousel-two">
                    <div class="tint"></div>
                    <a class="carousel-title">absolute Comfort</a>
                    <br />
                    <p class="carousel-text">We have just the right one</p>
                    <a class="btnGetOne" href="Categories.aspx?type=PostJob">POST A JOB</a>
                </div>

                <div class="carousel-one" id="carousel-three">
                    <div class="tint"></div>
                    <a class="carousel-title">explore our bar</a>
                    <br />
                    <p class="carousel-text">find a perfect match</p>
                    <a class="btnGetOne">Find Now</a>
                </div>

                <div class="carousel-one" id="carousel-four">
                    <div class="tint"></div>
                    <a class="carousel-title">excuisite cuisine</a>
                    <br />
                    <p class="carousel-text">testing</p>
                    <a class="btnGetOne">testing</a>
                </div>

                <div class="carousel-one" id="carousel-five">
                    <div class="tint"></div>
                    <a class="carousel-title">absolute Comfort</a>
                    <br />
                    <p class="carousel-text">testing</p>
                    <a class="btnGetOne">testing</a>
                </div>

                <div class="carousel-one" id="carousel-six">
                    <div class="tint"></div>
                    <a class="carousel-title">absolute Comfort</a>
                    <br />
                    <p class="carousel-text">testing</p>
                    <a class="btnGetOne">testing</a>
                </div>


    </div>


    <ul class="tab">
        <li>
            <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Information')" id="defaultOpen">Information</a>
        </li>
        <li>
            <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Events')" id="Events_Tab">Events</a>
        </li>
        <li>
            <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Booking')" id="Booking_Tab">Booking</a>
        </li>
    </ul>

    <div class="f8ty tabcontent" id="Information">
        <div class="f8ty_item">
            <br>
            <br>
            <br>
            <h5 class="align-left">Experience absolute satisfaction when you dine with us.</h5>
            <li class="align-left"> Our restaurant offers a great atmosphere and ambience for your business lunches, birthdays and anniversary celebrations
                in an electric environment.</li>
            <br>
            <br>
            <h5 class="align-left">Our specialties</h5>
            <br>
            <li class="align-left square-style">Private Dining</li>
            <li class="align-left square-style">Exclusive use (Weekends)</li>
            <li class="align-left square-style">Set Menus and Group bookings</li>
            <li class="align-left square-style">Breakfast meetings</li>


        </div>

        <div class="f8ty_item">
            <br>
            <br>
            <br>
            <h6>address</h6>
            <br>
            <li>20 elelenwo road, gra. Port Harcourt</li>
            <br>
            <br>

            <h6>telephone</h6>
            <br>
            <li>+234 (0) 703 114 0595 </li>
            <li>+234 (0) 909 800 2661</li>
            <br>
            <br>

            <h6>opening</h6>
            <br>
            <li>SUNDAYS - THURSDAYS: 11:30am - 10:30pm</li>
            <li>FRIDAYS - SATURDAYS: 11:30am - 12:00am</li>
            <br>
            <br>
        </div>

    </div>

    <div class="f8ty tabcontent" id="Booking">
        <i class="transparent fa fa-chevron-circle-right brown-text darken-3 icon"></i>
        <div class="f8ty_item make_big">
            <p>book a table</p>
            <br>
            <a style="font-size: 38px;text-transform: inherit;" class="booking_text">I would like a table for
                <select class="table_select">
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
                </select> at
                <select class="table_select">
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                    <option value="18:30">18:30</option>
                    <option value="19:00" selected="">19:00</option>
                    <option value="19:30">19:30</option>
                    <option value="20:00">20:00</option>
                    <option value="20:30">20:30</option>
                    <option value="21:00">21:00</option>
                    <option value="21:30">21:30</option>
                    <option value="22:00">22:00</option>
                    <option value="22:30">22:30</option>
                    <option value="23:00">23:00</option>
                </select> on
                <input type="date" placeholder="date" class="table_select" style="width: 367px;" id="hover">
                <br>
                <button type="submit" class="submit">book now</button>

            </a>
            <br>
        </div>

        <div class="f8ty_item small_hide">
            <br>
            <br>
            <br>
            <br>
            <a>Corporate dining</a>
            <br>
            <a>private dining</a>
            <br>
            <a>group dining</a>
            <br>
            <a>Delivery/ click &amp; collect</a>
            <br>
            <br>
        </div>

    </div>

    <div class="f8ty tabcontent" id="Events">
        <div class="holder1">
            <div class="holder2">
                <div class="date_holder">
                    <p style="color: #fff;margin: 10px;">17</p>
                    <a style="color: #fff;margin: 0;">Jan</a>
                </div>

                <p class="event_name">Night inspirescu party</p>
                <a class="thing" style="color: #652b27;">
                    <i class="fa fa-clock-o" style="margin-right: 10px;"></i>7.00- 20.00</a>
                <br>
                <br>
                <b class="days" style="color: #652b27;">Read more</b>
            </div>
        </div>



        <div class="holder_type_two">
            <div class="img"></div>

            <p class="event_name2">Grand Opening of Gravity Lounge</p>
            <a class="thing" style="color: #652b27;margin: 0 0 0 243px;width: calc(100% - 273px);">
                <i class="fa fa-clock-o" style="margin-right: 10px;"></i>4:30pm -5:30pm</a>
            <br>
            <br>
            <br>
            <b class="days black_text">Read more</b>


        </div>




        <div class="holder_type_three">
            <div class="img"></div>
            <p class="event_name2">Food and Wine tasting</p>
            <a class="thing" style="color: #652b27;margin: 0 0 0 243px;width: calc(100% - 273px);">
                <i class="fa fa-clock-o" style="margin-right: 10px;"></i>6pm - 8pm</a>
            <br>
            <br>
            <br>
            <b class="days black_text">Read more</b>

        </div>
    </div>



    <div class="five">

        <div class="five-right">
            <div class="say-container say-container-active" id="say1">
                <img class="contact-img" src="img/lovelyn.jpg">
                <p class="contact-text">Lovely environ, good food nice hospitality. Native soup was one in town.</p>
                <p class="contact-name">Lovelyn Bellgam</p>
            </div>

            <div class="say-container" id="say2">
                <img class="contact-img" src="img/nicole.jpg">
                <p class="contact-text">What a lovely restaurant, good food and service and atmosphere, definitely hope to go back. The roasting
                    were YUMMY!!!"</p>
                <p class="contact-name">Nicoles Jackson</p>
            </div>


            <!-- <div class="say-container" id="say3">
                <img class="contact-img" src="img/doc2.jpg">
                <p class="contact-text">When it comes to business, art, education even, ReginaOra is key for growth, success and absoulte satisfaction.</p>
                <p class="contact-name">Anyone</p>
            </div> -->


            <div class="text-toggle text-toggle-active" id="text1"></div>
            <div class="text-toggle" id="text2"></div>
            <!-- <div class="text-toggle" id="text3"></div> -->
        </div>
    </div>




   <?php include'footer.html'?>




</body>

<script>
    document.getElementById("defaultOpen").click();
</script>

</html>