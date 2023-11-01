<?php
//stylesheet
function insertHeaderAndFooterStyle() {
        echo "<style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .header {
            background-color: #1E407A;
            min-height: 17dvh;
            display: flex;
            justify-content: center;
            align-items: center;
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
            margin: 5px 0 0 0;
            height:60px;
            width:60px;
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
            margin:0;
            padding:0;
        }
        figcaption {
            margin-left:-10%;
            color:white;
            font-weight: 1000;
            font-size:20px;
        }
        .icon-social {
            width:50px;
            height:50px;
        }
        .footer-icons {
            width:30%;
            height:100px;
            gap:30px;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        a {
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
                    <img class="icon" src="../src/footer_images/socks_pink.png" alt="icon">
                    <figcaption>Catalogue</figcaption>
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
