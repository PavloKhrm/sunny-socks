<?php
//stylesheet
function insertHeaderAndFooterStyle() {
        echo "<style>
        @font-face {
            font-family: 'Nexa Bold';
            src: url('../src/fonts/Nexa\ Bold.otf');
        }
        @font-face {
            font-family: 'Nexa Light';
            src: url('../src/fonts/Nexa\ Light.otf');
        }
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .header {
            position:sticky;
            top:0;
            font-family: 'Nexa Light';
            background-color: #1E407A;
            min-height: 17dvh;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index:999;
        }
        .about {
            margin-right: 25vw;
            color:#FECD3E;
            font-size: 5vh;
            font-family: 'Nexa Bold', sans-serif;
        }
        .logo-img {
            min-height: 25px;
            height: 70%;
            max-height:100px;
            min-width:100px;
            width:15dvw;
            max-width:400px;
        }
        .footer {
            font-family: 'Nexa Light';
            display:flex;
            flex-wrap:wrap;
            background-color: #FECD3E;
            min-height: 100px;
            margin-top: auto;
        }
        .footer-logo{
            display:flex;
            align-items:center;
            justify-content:center;
            height:100%;
            width:20%;
        }
        .footer-image-logo{
            margin-top:15px;
            height:80px;
        }
        .footer-navigation {
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            width:50%;
            height:100%;
            gap:20px;
        }
        .icon {
            position:absolute;
            top:0;
            left:50%;
            transform:translateX(-50%);
            margin: 5px 0 0 0;
            height50px;
            width:50px;
            flex-basis:auto;
        }
        .icon-p {
            color:white;
            margin: 0;
            font-size:20px;
            width:100px;
            flex-basis: 33.33333 %;
        }
        .icon-signs {
            margin-left:200px;
            display:flex;
            gap:50px;
            justify-content:center;
            align-items:center;
        }
        .icons {
            display:flex;
            gap:100px;
            margin-left:200px;
        }
        figure{
            position:relative;
            display:flex;
            justify-content:center;
            align-items:center;
            margin:0;
            padding:0;
            width:100px;
            height:100px;
        }
        figure figcaption {
            position:absolute;
            top:60%;
            left:55%;
            transform:translateX(-45%);
            text-align:center;
            margin-left:-10%;
            color:white;
            font-weight: 1000;
            font-size:16px;
            font-family: 'Nexa Bold';
            min-width:100px;
            display:flex;
            justify-content:center;
        }
        .icon-social {
            height:50px;
            width:50px;
        }
        .footer-icons {
            width:30%;
            height:100px;
            gap:30px;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        figure a {
            text-decoration:none;
        }
    </style>";
    }
    //header div
    function insertHeader($pageName) {
        echo '
        <div class="header">
            <div class="about">' .$pageName. '</div>
            <div class="logo"> <img class="logo-img" src="../src/Logo/png/sunny_logos_slogan_yellow.png" alt="Sunny_logo"></div>    
        </div>';
    }


insertHeaderAndFooterStyle(); // insert style automatically after requiring
?>

<?php
//footer insertion
function insertFooter() {
        echo '
        <div class="footer">
            <div class="footer-logo"><img class="footer-image-logo" src="../src/Logo/png/sunny_logos_white.png" alt="logo"></div>
            <div class= "footer-navigation">
                <div class="icons">
                <figure>
                    <a href="../Pages/contact_form.php">
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
                    <a href="../Pages/about_page.php">
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
