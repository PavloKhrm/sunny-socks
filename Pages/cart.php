<?php
session_start();
require_once("../PHP_functions/footerAndHeader.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./css/cart.css">
</head>

<body>
    <?php
    insertHeader("Cart");
    ?>
    <div class="flex">
        <?php
        if (isset($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $item) {
                echo "<div class ='flexItem flex' > <img src='../src/sunny_socks_photos/packaging/png/catalogus_sokken_" . $item["style"] . "_" . $item["color"] . ".png' alt='Sock'><h2>Quantity: " . $item['quantity'] . "</h2></div>";
            }
        }
        else{
            echo "<h1>No Items in Cart!</h1>";
        }


        ?>
        <a href="clearCart.php" class="button">Clear Cart</a>
    </div>
    <?php
    insertFooter();
    ?>
</body>

</html>