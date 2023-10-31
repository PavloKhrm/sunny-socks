<?php require_once("../PHP_functions/footerAndHeader.php"); ?>
<?php 


    // if (!empty($_POST["colorSock"])) {
    //     $currentColor = strtolower($_POST["colorSock"]); // gets a color from the user
    // } //else $currentColor = "red"; // default color

    // if (!empty($_POST["style"])) {
    //     $currentStyle = $_POST["style"]; // gets a style from the user
    // } //else $currentStyle = "uni"; // default style

    $cookie_duration = 1000;
    setcookie ("_color", $_POST['colorSock'], $cookie_duration);
    setcookie ("_style", $_POST['style'], $cookie_duration);

    $currentColor = isset($_COOKIE["_color"]) ? $_COOKIE["_color"] : "Red";
    $currentStyle = isset($_COOKIE["_style"]) ? $_COOKIE["_style"] : "uni";

    echo "current style: $currentStyle <br>";

    echo "current color: $currentColor";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="./css/shopping_page_style.css" type="text/css">
</head>

<body>
    <?php insertHeader("Shopping");?>
    <main>
        <form action="./shopping_page.php" method="post">
            <div class="item column_left">
                <h2>100% cotton</h2>
                <img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_<?php echo $currentStyle?>_<?php echo strtolower($currentColor)?>.png" alt="Sock"
                    class="product">
                <p>
                    <a href=""><img src="../" alt=""></a>
                <h2 class="no_top_margin">3.99€</h2>
                <a href=""><img src="" alt=""></a>
                </p>
            </div>

            <div class="item column_right">
                <h1 class="no_top_margin">Choose the style</h1>
                <div class="flex">

                    <?php
                    $styles = ["uni", "stripes"];
                    foreach ($styles as $style) {
                        echo '<div class="item">
                                    <input type="radio" name="style" id="' . $style . '" value="' . $style . '" onclick="this.form.submit()">
                                    <label for="' . $style . '" class="item">
                                        <img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_' . $style . '_red.png" alt="'.$style.' Sock">
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
                        echo '<input type="radio" name="colorSock" id="color' . $color . '" value="' . $color . '" onclick="this.form.submit()">
                                <label for="color' . $color . '">
                                    <img src="../src/sunny_illustrations/png/Sunny_socks_' . $color . '.png" alt="' . $color . ' Illustration" class="illustration">
                                    
                                </label>' ;
                    }
                    ?>
                </div>
            </div>
        </form>
    </main>
    <?php insertFooter(); ?>
</body>

</html>