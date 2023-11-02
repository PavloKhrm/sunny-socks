<?php require_once("../PHP_functions/footerAndHeader.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/catalogue.css">
</head>
<body>
    <?php
    insertHeader("Catalogue"); //insert header from external file
    ?>

    <div class="page_header">
        <h class = "page_header_word header_word_blue" >Express</h1>
        <h class = "page_header_word header_word_green" >yourself</h1>
        <h class = "page_header_word header_word_orange" >with</h1>
        <h class = "page_header_word header_word_pink" >our</h1>
        <h class = "page_header_word header_word_yellow" >socks</h1>
    </div>

    <div class="page_content">
        <a href="./shopping_page.php">
            <div class= "left_collumn">
                <div class="left_collumn_part"> <!--top part of left collumn-->
                    <div class="buy_now" >
                        <h1>Buy Now</h1>
                    </div>
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Blue.png" alt="blue striped sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Green.png" alt="green striped ock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Pink.png" alt="pink striped sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Red.png" alt="red striped sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Yellow.png" alt="yellow striped sock photo">
                </div>

                <div class="left_collumn_part"> <!--bottom part of left collumn-->
                    <div class="buy_now" >
                        <h1>Buy Now</h1>
                    </div>
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Blue.png" alt="blue unicolor sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Green.png" alt="green unicolor sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Pink.png" alt="pink unicolor sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Red.png" alt="red unicolor sock photo">
                    <img class="image_left_collumn" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Yellow.png" alt="yellow unicolor sock photo">
                </div>
            </div>
        </a>



        <div class="right_collumn">
            <img class="image_right_collumn" src="../src/images_catalogue/sneaker_with_yellow_sock.png" alt="">
        </div>   
    </div>

    <?php
    insertFooter(); //insert footer from external file
    ?>
</body>
</html>