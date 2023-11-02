<?php require_once("../PHP_functions/footerAndHeader.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/backup.css">
</head>
<body>
    <div class="top_picture_wrap">
        <img class="top_picture" src="../src/images_backup/Backup1.png" alt="top picture">
    </div>

    <div class="logo_container">
        <img class="logo" src="../src/Logo/png/sunny_logos_slogan_yellow.png" alt="logo">
    </div>

    <div class="positioning_top_part">
            <h1 class="brighten_your_day_text">Brighten your day</h1>
    </div>

    <div class="page_content">
        <div class= "left_collumn">
            <a href="./shopping_page.php">
                <div class="left_collumn_part"> <!--top part of left collumn-->
                    <div class="buy_now" >
                        <h1>Buy Now</h1>
                    </div>

                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Blue.png" alt="blue striped sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Green.png" alt="green unicolor sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Pink.png" alt="pink striped sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Red.png" alt="red unicolor sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Yellow.png" alt="yellow striped sock photo">
                </div>
            </a>
            <div class="eco_frinedly_text">
                <img class="recycle_image" src="../src/images_about/recycle.png" alt="ecyce">
                <h class = "word_blue" >one</h>
                <h class = "word_green" >hundred</h>
                <h class = "word_orange" >percent</h>
                <h class = "word_pink" >eco-frinedly</h>
            </div>
        </div>
    </div>
    
    <?php
    insertFooter(); //insert footer from external file
    ?>
</body>
</html>