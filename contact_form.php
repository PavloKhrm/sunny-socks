<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Контакты</title>
</head>
<body>
<?php
        require_once("header.php");

    ?>
   
        <div class="contact-info">
            <h1>Need help?</h1>
            <p>Gmail: <a href="mailto:info@yourdomain.com">sunny.socks@gmail.com</a></p>
            <p>Phone: </p> 
            <p>+31 672 391 1332</p>
            <p>
                <img src="images/facebook-logo.png" alt="Facebook" width="32" height="32">
                <a href="https://www.facebook.com/yourpage">Sunny.Socks</a>
            </p>
            <p>
                <img src="images/instagram-logo.png" alt="Instagram" width="32" height="32">
                <a href="https://www.instagram.com/yourpage">Sunny.Socks</a>   
            </p>
            <br>
            <p class="contact-info-p">Just fill in a contact form 
               and our customer service 
               will contact you back
            </p>
        </div>
        <div class="contact-form">
            <h2>Contact us</h2>
            <form action="contact.php" method="post">
                <label for="name">Full name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Gmail:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your question:</label>
                <textarea id="message" name="message" rows="7" required></textarea>

                <button type="submit">Send</button>
            </form>
        </div>
        <?php
        require_once("footer.php");
    ?>
</body>
</html>
