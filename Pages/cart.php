<?php
session_start();
require_once("../PHP_functions/footerAndHeader.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./css/cart_style.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/footerAndHeader.css">
</head>

<body>
    <?php
        insertHeader("Cart");
    ?>
    <?php
        require_once("../PHP_functions/phoneMenu.php");
    ?>
  
    <main class="flex">
        <?php
        $totalPrice = 0;
        if (isset($_SESSION["cart"])) { //check if cart has items
            foreach ($_SESSION["cart"] as $item) {  //display each item in cart
                $itemPrice = $item["quantity"]*3.99;
                echo "<div class ='flex_item flex' > 
                        <img src='../src/sunny_socks_photos/packaging/png/catalogus_sokken_" . $item["style"] . "_" . $item["color"] . ".png' alt='Sock'>
                        <div>
                            <h2>Quantity: " . $item['quantity'] . "</h2>
                            <h2>Price: " . $itemPrice . "€</h2>
                            </div>
                        </div>";
                $totalPrice += $itemPrice;
            }
        } else {
            echo "<h1>No Items in Cart!</h1>";
        }
        ?>
        
        <?php 
            if($totalPrice > 0) {
            echo "<div><h2>Total: " . $totalPrice . "€</h2></div>
                <a href='../PHP_functions/clearCart.php' class='button clear_button'>Clear Cart</a>";
            }
            ?>
        
       <a href="./shopping_page.php" class="button back_button">Go Back</a>
    </main>
    <?php
    insertFooter();
    ?>
    <script src="../JS_functions/phone_menu.js"></script>


</body>

</html>