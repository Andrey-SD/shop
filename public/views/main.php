<?php
echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
       
        <link rel="stylesheet" href="views/style/main.css" type="text/css">
        <link rel="stylesheet" href="views/style/header.css" type="text/css">
        <link rel="stylesheet" href="views/style/section.css" type="text/css">
    </head>
    <body>
    ';
include VIEWS.'header.php';
include VIEWS.'section_products.php';
include VIEWS.'footer.php';
echo '
    </body>
    </html>
';
?>

