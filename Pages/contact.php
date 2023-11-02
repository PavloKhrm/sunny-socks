<?php
session_start();
require_once("../PHP_functions/footerAndHeader.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/contact_style.css">
    <title>Контакты</title>
</head>
<body>
<?php
insertHeader("Cart");
?>
<div class="container">
    <div class="contact-info">
        <h1>Need help?</h1>
        <p class="email">Email:</p>
        <p class="email2"> <a href="mailto:info@yourdomain.com">Sunny.socks@gmail.com</a></p>
        <p class="phone">Phone: </p>
        <p class="phone2">+31 672 391 1332</p>
        <p class="vertikal_el">
            <img src="../src/images_contact_page/facebook-logo.png" alt="Facebook" width="32" height="32">
            <a href="https://www.facebook.com/yourpage">&nbsp;Sunny.Socks</a>
        </p>
        <p class="vertikal_el">
            <img src="../src/images_contact_page/instagram-logo.png" alt="Instagram" width="32" height="32">
            <a href="https://www.instagram.com/yourpage">&nbsp;Sunny.Socks</a>
        </p>
        
        <p class="contact-info-p">
            Just fill in a contact form
            and our customer service
            will contact you back
        </p>
    </div>
    <div class="contact-form">
        <h1>Contact us</h1>
        <form id="contact-form">
            <p class="smallp">
                <label for="name">Full name:</label>
            </p>
            <input type="text" id="name" name="name" required>

            <p class="smallp">
                <label for="email">Email:</label>
            </p>
            <input type="email" id="email" name="email" required
                   pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$">
            <span id="emailError" class="error-message"></span>

            <p class="smallp">
                <label for="message">Your question:</label>
            </p>
            <textarea id="message" name="message" rows="7" required></textarea>

            <button class="buttton" id="openModalButton">Submit</button>
        </form>
    </div>
</div>

<div class="modal" id="modal">
    <div class="modal-content">
        <span class="close-modal-button" id="closeModalButton">&times;</span>
        <p class="modal-text"><br>Your message has been sent</p>
        <img src="../src/images_contact_page/mail.png" class="modal-image" alt="Изображение">
    </div>
</div>

<script src="../JS_functions/script.js"></script>

<?php
insertFooter();
?>

</body>
</html>
