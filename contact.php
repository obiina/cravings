<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/cravings.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cravings|Menu</title>
</head>

<body>

    <?php include('header.html'); ?>

    <div class="shadow_div">
        <div class="map_holder">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7951.344327468903!2d6.995973209011871!3d4.8262376439122505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069ce7aac861f1d%3A0x36256517c7047399!2sCravings!5e0!3m2!1sen!2sng!4v1507819592656"
                width="100%" height="100%" frameborder="0" style="border:0;filter: opacity(0.95);" allowfullscreen=""></iframe>

        </div>

        <form class="contact_form">
            <p>say something</p>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea placeholder="Your Message" class="message removeOne"> </textarea>
            <br>
            <button type="submit">Send</button>
        </form>

    </div>

   <?php include'footer.html'?>



</body>

<style>
    body {
        background: url(img/001.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>

</html>