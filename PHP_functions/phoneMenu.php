<?php
//insert phone menu HTML
echo '
        <div class = "menu-div" id ="menuDiv">
            <div class = "menu-rect" id = "menuRect">
                <svg viewBox="0 0 100 80" width="40" height="40">
                    <rect width="100" height="10" fill="#FECD3E"></rect>
                    <rect y="30" width="100" height="10" fill="#FECD3E"></rect>
                    <rect y="60" width="100" height="10" fill="#FECD3E"></rect>
                </svg>
            </div>
        </div>
        <div class="phone-menu" id="phoneMenu">
            <div class="phone-icons" id="phoneIcons" >
                <a href="./backup.php">
                    <img class="phone-logo-img" src="../src/Logo/png/sunny_logos_slogan_yellow.png" alt="Sunny_logo">
                </a>
                <figure>
                    <a href="../Pages/contact.php">
                    <img class="icon" src="../src/footer_images/contact.png" alt="icon">
                    <figcaption class = "menu-blue">Contact us</figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="../Pages/about_page.php">
                    <img class="icon" src="../src/footer_images/info_blue.png" alt="icon">
                    <figcaption class = "menu-blue">About us</figcaption>
                    </a>
                </figure>
                <figure>
                    <a href="../Pages/Catalogue.php">
                        <img class="icon" src="../src/footer_images/socks_pink.png" alt="icon">
                        <figcaption class = "fig-catalogue menu-blue" >Catalogue</figcaption>
                    </a>
                </figure>
                <figure class = "cart">
                    <a href="../Pages/cart.php">
                        <img class="icon" src="../src/footer_images/cart.png" alt="icon">
                        <figcaption class="fig-cart menu-blue">Cart</figcaption>
                    </a>
                </figure>
            </div>
        </div>' ;
?>