<?php require_once("../PHP_functions/footerAndHeader.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="./css/catalogue.css">
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
        <div class= "left_collumn"> 
            <div class="left_collumn_part"> <!--top part of left collumn-->
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Blue.png" alt="blue sock photo">
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Green.png" alt="blue sock photo">
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Pink.png" alt="blue sock photo">
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Red.png" alt="blue sock photo">
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_Yellow.png" alt="blue sock photo">
            </div>

            <div class="left_collumn_part"> <!--bottom part of left collumn-->
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Blue.png" alt="blue sock photo">
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Green.png" alt="blue sock photo">
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Pink.png" alt="blue sock photo">
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Red.png" alt="blue sock photo">
                <img class="image" src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_Yellow.png" alt="blue sock photo">
            </div>
        </div>




        <div class="right_collumn"> </div>   
    </div>

    <?php
    insertFooter(); //insert footer from external file
    ?>
</body>
</html>