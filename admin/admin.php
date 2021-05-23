<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                background-color: #ffffdb;
            }
        </style>
    </head>
    <body>
    <a href="http://localhost/cs306-project-step-4/index.html" class="btn btn-primary btn-lg active" role="button"
        aria-pressed="true">Index</a>
        <?php 
            include "book/book.php";
            include "wrote/wrote.php";
            include "pastpurchase/pastpurchase.php";
            include "user/user.php";
            include "review/review.php";
            include "author/author.php";
            include "shoppinglist/shoppinglist.php";
            include "wishlist/wishlist.php";
            include "includes/includes.php";
        ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>