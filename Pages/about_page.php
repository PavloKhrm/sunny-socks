<?php require_once("../PHP_functions/footerAndHeader.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>About Us</title>
    <link rel="stylesheet" href="./css//about_page_style.css" type="text/css">
</head>
<body>
    <!--- Id for where the "go back" button takes the user --->
    <div id="goBack"></div>
    <?php 
        insertHeader("About Us"); 
    ?>
    <?php
        require_once("../PHP_functions/phoneMenu.php");
    ?>
    <div class="about_info">
        <div class="branding">
            <h2>Branding</h2>
            <h3>Branding is the feeling someone gets when thinking of Sunny.
                It goes beyond the product that is being sold. It is about
                the values that a brand communicates.</h3>
        </div>
        <img src="../src/images_about/branding.jpg" alt="a colorful pile of socks under a blue sky" class="branding_img">
        <div class="colorful">
            <h2>Colorful</h2>
            <h3>We like to add some color to one of the most everyday moments
                of life: putting on your socks. We add literal color by designing
                simple basic while socks with a pop of color.</h3>
        </div>
        <img src="../src/images_about/colorful.png" alt="colorful small socks inside two big socks" class="colorful_img">
        <div class="brand_values">
            <h2>Sunny's brand values:</h2>
            <h3>Positivity is part of our DNA. Sunny likes to look at the
                bright side. Every problem is an opportunity to come up with
                a solution. These values are the core of Sunny's branding and
                should be communicated.</h3>
        </div>
        <img src="../src/images_about/values.png" alt="positivity written out with sticky notes" class="brand_values_img">
        <div class="mission">
            <h2>Mission</h2>
            <h3>Sunny's mission is to brighten peoples day by providing high
                quality, ethically produced socks.</h3>
        </div>
        <img src="../src/images_about/mission.jpeg" alt="a scene with colorful houses" class="mission_img">
        <div class="vision">
            <h2>Vision</h2>
            <h3>Sunny's Vision is to produce ethical and sustainable socks
                that are available for everybody. To communicate all that
                Sunny is, in a consistent way, a visual branding is developed</h3>
        </div>
        <img src="../src/images_about/recycle.png" alt="recycle symbol with the word sunny in the middle" class="recycle_img">
        <!--- Button to send user back to the top of the page --->
        <div class="back_container">
            <a href="#goBack" class="back_button">go back<img src="../src/images_about/arrow_back.png" alt="back button arrow"></a>
            
        </div>
    </div>
    <?php 
        insertFooter(); 
    ?>
    <script src="../JS_functions/phone_menu.js"></script>
</body>
</html>