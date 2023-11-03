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
    <?php
    $imagePath = './src/images_catalogue/sneaker_with_yellow_sock.png'; 
    header("Content-type: image/png");
    readfile($imagePath);
    ?>

        <div class="curve"></div>
        <img src="header-image.php" alt="Header Image">
    </header>
    
    <?php
    insertFooter(); //insert footer from external file
    ?>

    <script src="../JS_functions/phone_menu.js"></script>
</body>
</html>