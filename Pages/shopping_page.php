<script>
    let colorItem = "Red";
    let styleItem = "uni";
</script>
<?php 
    session_start();
    require_once("../PHP_functions/footerAndHeader.php"); 

    if(!isset($_GET["styleItem"])){ //check if styleItem variable was submitted
        $styleItem = "uni";
    } else {
        $jsStyle = $_GET['styleItem'];
        echo "<script>styleItem = '$jsStyle';</script>";   
    }

    if(!isset($_GET["colorItem"])){ //check if colorItem variable was submitted
        $colorItem = "Red";
    } else {
        $jsColor = $_GET['colorItem'];
        echo "<script>colorItem = '$jsColor';</script>";   
    }
    if (isset($_GET["buyItem"])) {  //check if buyItem variable was submitted
        
        $buyItem = $_GET["buyItem"];

        if (!empty($_SESSION["cart"])){ //check if cart session is not empty

            $cartArray = array_column($_SESSION["cart"], "buyItem");

            if (in_array($buyItem, $cartArray)){    //check if item already exists in cart

                $_SESSION["cart"][$buyItem]["quantity"] += 1;
            }
            else{
                $item = [
                    "buyItem" => $_GET["buyItem"],
                    "color" => $_GET["colorItem"],
                    "style" => $_GET["styleItem"],
                    "quantity" => 1
                ];
                echo $item;
        
                $_SESSION["cart"][$buyItem] = $item;

            }
        }
        else{
            $item = [
                "buyItem" => $_GET["buyItem"],
                "color" => $_GET["colorItem"],
                "style" => $_GET["styleItem"],
                "quantity" => 1
            ];
    
            $_SESSION["cart"][$buyItem] = $item;
        }
    }

     
    if(!isset($styleItem)){
        $styleItem = $_GET["styleItem"];
    }

    if(!isset($colorItem)){
        $colorItem = $_GET["colorItem"];
    }
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="./css/shopping_page_style.css" type="text/css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/footerAndHeader.css">
</head>

<body>

    <?php 
        insertHeader("Shopping");
    ?>
    <?php
        require_once("../PHP_functions/phoneMenu.php");
    ?>

    <main>
        <form action="./shopping_page.php" method="post">
            <div class="item column_left">
                <h2>100% cotton</h2>
                <img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_<?php echo $styleItem . '_' . $colorItem; ?>.png" alt="Sock"
                    class="product" id="mainImg">
                <div class="flex flex_logos">
                    <a target ="_blank" href="https://www.hema.nl"><img src="../src/Logo/png/hema-logo-png-transparent.png" alt="Hema Logo" class="hema_logo"></a>
                    <h2 class="no_top_margin">3.99€</h2>
                    <a target ="_blank" href="https://www.bol.com/nl/nl/"><img src="../src/Logo/png/bol-logo.png" alt="Bol Logo" class="bol_logo"></a>
                </div>
            </div>

            <div class="item column_right">
                <h1 class="no_top_margin">Choose the style</h1>
                <div class="flex">

                    <?php
                    $styles = ["uni", "stripes"];
                    foreach ($styles as $style) {

                        echo '<div class="item">
                                    <input type="radio" name="style" id="' . $style . '" value="' . $style . '" onclick="changeStyle(\''.$style.'\'); location.href=\'./shopping_page.php?styleItem=' . $style . '&colorItem=' . $colorItem . '\'">
                                    <label for="' . $style . '" class="item">
                                        <img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_' . $style . '_'. $colorItem .'.png" alt="'.$style.' Sock" class="style_icon">
                                        <p>' . $style . '</p>
                                    </label>
                                </div>';
                    }
                    ?>
                </div>
                <h1>Choose the color</h1>
                <div class="flex">
                    <?php
                    $colors = ["Red", "Pink", "Yellow", "Green", "Blue"];
                    foreach ($colors as $color) {
                        echo '<input type="radio" name="colorSock" id="color' . $color . '" value="' . $color . '" onclick="changeColor(\''.$color.'\'); location.href=\'./shopping_page.php?styleItem=' . $styleItem . '&colorItem=' . $color . '\'">
                                <label for="color' . $color . '">
                                    <img src="../src/sunny_illustrations/png/Sunny_socks_' . $color . '.png" alt="' . $color . ' Illustration" class="illustration">
                                    
                                </label>' ;
                    }
                    ?>
                </div>

                <a href="./shopping_page.php?styleItem=<?php echo $styleItem . '&colorItem=' . $colorItem . '&buyItem='.$styleItem . $colorItem?>" class="button">Add to cart</a>
            </div>
        </form>
    </main>
    <script src="../JS_functions/shopping_page.js"></script>
    <?php insertFooter(); 
        ?>
    <script src="../JS_functions/phone_menu.js"></script>
</body>

</html>