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
    <form action="./shopping_page.php" method="post">
        <main>
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
                    <div class="item">
                        <input type="radio" name="style" id="uni-color" value="uni-color" onclick="this.form.submit()">
                        <label for="uni-color" class="item">
                            <img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_uni_red.png" alt="Unicolor Sock">
                            <p>uni color</p>
                        </label>
                    </div>
                    <div class="item">
                        <input type="radio" name="style" id="striped" value="striped" onclick="this.form.submit()">
                        <label for="striped" class="item">
                            <img src="../src/sunny_socks_photos/packaging/png/catalogus_sokken_stripes_red.png" alt="Striped Sock">
                            <p>stripes</p>
                        </label>
                    </div>
                </div>
                <h1>Choose the color</h1>
                <div class="flex">
                    <input type="radio" name="color" id="colorOrange" value="orange" onclick="this.form.submit()">
                    <label for="colorOrange">
                        <img src="../src/sunny_illustrations/png/sunny_socks_Orange.png" alt="Orange Illustration" class="illustration">
                    </label>
                    <input type="radio" name="color" id="colorPink" value="pink" onclick="this.form.submit()">
                        <label for="colorPink">
                            <img src="../src/sunny_illustrations/png/sunny_socks_Pink.png" alt="Pink Illustration" class="illustration">
                        </label>
                    <input type="radio" name="color" id="colorYellow" value="yellow" onclick="this.form.submit()">
                    <label for="colorYellow">
                        <img src="../src/sunny_illustrations/png/sunny_socks_Yellow.png" alt="Yellow Illustration" class="illustration">
                    </label>
                    <input type="radio" name="color" id="colorGreen" value="green" onclick="this.form.submit()">
                    <label for="colorGreen">
                        <img src="../src/sunny_illustrations/png/sunny_socks_Green.png" alt="Green Illustration" class="illustration">
                    </label>
                    <input type="radio" name="color" id="colorBlue" value="blue" onclick="this.form.submit()">
                    <label for="colorBlue">
                        <img src="../src/sunny_illustrations/png/sunny_socks_Blue.png" alt="Blue Illustration" class="illustration">
                    </label>


                </div>
            </div>
        </main>
    </form>

    <?php
    require_once("../PHP_functions/footer.php")
        ?>
</body>

</html>