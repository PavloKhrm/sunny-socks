<?php require_once("../PHP_functions/footerAndHeader.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/frontpage_style.css" type="text/css">
</head>

<body>
    <header>
        <div class="curve"></div>
        <img src="../src/images_catalogue/sneaker_with_yellow_sock.png" alt="Header Image">
    </header>
    
    <div class="top_text">
        <h1 class="byd_text">brighten your day</h1>
    </div>

    <div class="content">
        <div class="catalogue"></div>
        <div class="principle"></div>

    </div>
    
    <?php
    insertFooter(); //insert footer from external file
    ?>

    <script src="../JS_functions/phone_menu.js"></script>
</body>
</html>