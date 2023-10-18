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
        <div class="item column_left">
            <h2>100% cotton</h2>
            <img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_red.png" alt="Sock" class="product">
            <p>
                <a href=""><img src="../" alt=""></a>
            <h2 class="no_top_margin">3.99€</h2>
            <a href=""><img src="" alt=""></a>
            </p>
        </div>

        <div class="item column_right">
            <h1 class="no_top_margin">Choose the style</h1>
            <div class="flex">
                <div class="item">
                    <img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_red.png" alt="Unicolor Sock">
                    <p>uni color</p>
                </div>
                <div class="item"><img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_red.png"
                        alt="Striped Sock">
                    <p>stripes</p>
                </div>
            </div>
            <h1>Choose the color</h1>
            <div class="flex">
                <img src="../src/sunny_illustrations/png/sunny_socks_Orange.png" alt="Red Illustration" class="illustration">
                <img src="../src/sunny_illustrations/png/sunny_socks_Pink.png" alt="Red Illustration" class="illustration">
                <img src="../src/sunny_illustrations/png/sunny_socks_Yellow.png" alt="Red Illustration" class="illustration">
                <img src="../src/sunny_illustrations/png/sunny_socks_Green.png" alt="Red Illustration" class="illustration">
                <img src="../src/sunny_illustrations/png/sunny_socks_Blue.png" alt="Red Illustration" class="illustration">
            </div>
        </div>

    </main>


    <?php
    require_once("../PHP_functions/footer.php")
        ?>
</body>

</html>