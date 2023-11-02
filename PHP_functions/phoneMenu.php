<?php
echo '
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
        </div>' ;

    echo "
        <style>
            .menu-div {
                width:100%;
                height:50px;
            }
            .menu-rect {
                position:absolute;
                top:0;
                right:0;  
            }

            .phone-menu {
                display:none;
                justify-content: center;
                align-items: center;
            }
        </style>
    ";
?>