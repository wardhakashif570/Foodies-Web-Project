<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="top off website.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="body.css">
</head>

<body>



<?php include('navbar.php'); ?>




    <div class="slideShow">
        <!--this is html for slideshow-->

        <div class="mySlides">
            <img src="pictures/Doppler-comp.png" alt="DOPPLER" class="image">
            <h5 class="itemlabels">Doppler</h5>
        </div>

        <div class="mySlides">
            <img src="pictures/Animal-Fries-menu.png" alt="ANIMAL FRIES" class="image">
            <h5 class="itemlabels">Animal Fries</h5>
        </div>

        <div class="mySlides">
            <img src="pictures/Chocolate Heaven.png" alt="Chocolate Heaven" class="image">
            <h5 class="itemlabels">Chocolate Heaven</h5>
        </div>

        <div class="mySlides">
            <img src="pictures/double-tikka-burger.png" alt="Double tikka burger" class="image">
            <h5 class="itemlabels">Double Tikka</h5>
        </div>

        <div class="mySlides">
            <img src="pictures/Omelette-N-Tomato-Wrap-Meal-600x600.png" alt="Omelete and tomato wrap" class="image">
            <h5 class="itemlabels">Omelette and tomato Wraps</h5>
        </div>

        <div class="mySlides">
            <img src="pictures/noodle_PNG48.png" alt="noodles" class="image">
            <h5 class="itemlabels">Noodles</h5>
        </div>

        <div class="mySlides">
            <img src="pictures/hot-n-spicy-steak-burger.png" alt="Hot and spicy steak burger" class="image">
            <h5 class="itemlabels">hot and spicy steak burger</h5>
        </div>
    </div>



    <div id="about-us">
        <h1 class="headings">About us</h1>

        <p class="heading">Welcome to the home of delicious gourmet veritey of food. Foodies is a modern contemporary restaurant that
            exists to delight passionate food lovers. Walk in and place your order and sit back and relax and soak in
            our attractive ambiance as you wait for your order to be prepared. All food items are cooked to order and
            we pride ourselves on serving fresh, delicious and hygienic food that tantalize the taste buds and excite
            your senses. Our packaging is designed to be easy to hold and carry as well as ensure that your food
            maintain their flavour and shape.</p>
    </div>

    <h1 class="headings">find us here</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924244.0619641689!2d66.59499551729773!3d25.192146526892635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C+Karachi+City%2C+Sindh!5e0!3m2!1sen!2s!4v1558384018887!5m2!1sen!2s"
        frameborder="0" allowfullscreen>
    </iframe>


    <br>
    <br>
    <br>


     <?php include('footer.php'); ?>
    <!-- <footer class="footer">
        <div class="footer-content">

            <ul>
                <li><a href="#about-us">About us</a> </li>
                <li><a href="contact-us.php">Contact us</a></li>
                <li onclick="window.document.getElementById('careers').style.display='block'">career</li>
            </ul>

            <div class="footer-image-container">
                <a href="https://twitter.com/"><img src="images (3).png" class="footer-images" alt="twitter"></a>
                <a href="https://facebook.com/"><img src="images.png" class="footer-images" alt="facebook"></a>
                <a href="https://instagram.com/"><img src="images (4).png" class="footer-images" alt="instagram"></a>
                
                
                
            </div>
        </div>
    </footer> -->










    <script src="home.js"></script>
</body>

</html>