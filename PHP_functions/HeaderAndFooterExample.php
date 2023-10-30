<?php
        require_once("./footerAndHeader.php"); // first, you import functions  from this php file
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    insertHeader("Your page"); // then, on top of the page, you insert header and write your page name inside. For example, for "Contact us" page, write "Contact us" inside. Make sure it is written in string
    ?>
    <h1>content</h1>
    <?php
    insertFooter(); // insert footer in the end of your page(after the content) 
    ?>
</body>
</html>