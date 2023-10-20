<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="./css/shopping_page_style.css" type="text/css">
</head>

<body>
    <?php
    require_once("../PHP_functions/header.php");
    ?>
    <main>
        <form action="./shopping_page.php" method="post">
            <div class="item column_left">
                <h2>100% cotton</h2>
                <img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_red.png" alt="Sock"
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
                    $colors = ["orange", "pink", "yellow", "green", "blue"];
                    foreach ($colors as $color) {
                        echo '<input type="radio" name="color" id="color' . $color . '" value="' . $color . '" onclick="this.form.submit()">
                                <label for="color' . $color . '">
                                    <img src="../src/sunny_illustrations/png/sunny_socks_' . $color . '.png" alt="' . $color . ' Illustration" class="illustration">
                                </label>';
                    }
                    ?>
                </div>
            </div>
        </form>
    </main>
    <?php
    require_once("../PHP_functions/footer.php")
        ?>
</body>

</html>