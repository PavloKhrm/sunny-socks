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
</head>

<body>
    <?php
        insertHeader("Cart");
    ?>
    <div class = "menu-div">
        <div class = "menu-rect" id = "menuRect">
            <svg viewBox="0 0 100 80" width="40" height="40">
                <rect width="100" height="20"></rect>
                <rect y="30" width="100" height="20"></rect>
                <rect y="60" width="100" height="20"></rect>
            </svg>
        </div>
    </div>
    <div class="phone-menu" id="phoneMenu">
    <div class="phone-icons" id="phoneIcons" >
                <figure>
                    <a href="../Pages/contact.php">
                    <img class="icon" src="../src/footer_images/contact.png" alt="icon">
                    <figcaption>Contact us</figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="../Pages/about_page.php">
                    <img class="icon" src="../src/footer_images/info_blue.png" alt="icon">
                    <figcaption>About us</figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="../Pages/Catalogue.php">
                        <img class="icon" src="../src/footer_images/socks_pink.png" alt="icon">
                        <figcaption class = "fig-catalogue" >Catalogue</figcaption>
                    </a>
                </figure>
                <figure class = "cart">
                    <a href="../Pages/cart.php">
                        <img class="icon" src="../src/footer_images/cart.png" alt="icon">
                        <figcaption class="fig-cart">Cart</figcaption>
                    </a>
                </figure>
                </div>
            </div>
</div>
    </div>
    <main class="flex">
        <?php
        $totalPrice = 0;
        if (isset($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $item) {
                $itemPrice = $item["quantity"]*3.99;
                echo "<div class ='flex_item flex' > <img src='../src/sunny_socks_photos/packaging/png/catalogus_sokken_" . $item["style"] . "_" . $item["color"] . ".png' alt='Sock'><div><h2>Quantity: " . $item['quantity'] . "</h2><h2>Price: " . $itemPrice . "€</h2></div></div>";
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
        
       <a href="shopping_page.php" class="button back_button">Go Back</a>
    </main>
    <?php
    insertFooter();
    ?>
    <script>
        function resetMenu() {
            if (window.innerWidth >= 1200) {
                document.getElementById("header").style["display"] = "flex";
                document.getElementById("footer").style["display"] = "flex";
                document.getElementById("menuRect").style["display"] = "none";
                document.getElementById("phoneMenu").style["display"] = "none";
            }else {
                document.getElementById("menuRect").style["display"] = "block";
                document.getElementById("header").style["display"] = "none";
                document.getElementById("footer").style["display"] = "none";
            }
        }
        resetMenu();
        window.addEventListener("resize", resetMenu);
        function showMenu() {
        }
        let menuIsDisplayed = false;
        function changeMenuDisplay() {
            if (menuIsDisplayed) {
                document.getElementById("phoneMenu").style["display"] = "flex";
                menuIsDisplayed = false;
            } else {
                document.getElementById("phoneMenu").style["display"] = "none";
                menuIsDisplayed = true;
            }
        }
        document.getElementById("menuRect").addEventListener("click", changeMenuDisplay);
    </script>
    

</body>

</html>