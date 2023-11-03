<?php
    //header div
    function insertHeader($pageName) {
        echo '
        <div class="header" id = "header">
            <div class="about">' .$pageName. '</div>
            <div class="logo"> <a href="./backup.php"> <img class="logo-img" src="../src/Logo/png/sunny_logos_slogan_yellow.png" alt="Sunny_logo"></a></div>    
        </div>';
    }
?>

<?php
//footer insertion
function insertFooter() {
        echo '
        <div class="footer" id="footer">
            <div class="footer-logo"><img class="footer-image-logo" src="../src/Logo/png/sunny_logos_white.png" alt="logo"></div>
            <div class= "footer-navigation">
                <div class="icons">
                
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
            <div class="footer-icons">
                <img class="icon-social" src="../src/footer_images/facebook_1.png" alt="icon">
                <img class="icon-social" src="../src/footer_images/instagram_1.png" alt="icon">
            </div>
        </div>';
}
?>
