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
            background-color: #FECD3E;
            min-height: 11dvh;
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
            margin-top:20px;
            width:250px;
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
            <div class= "footer-navigation"></div>
            <div class="footer-icons"></div>
        </div>';
}
?>
