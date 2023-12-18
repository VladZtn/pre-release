<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../templates/css/style.css">
</head>
<body>
    <header>
       <a href="../index.php" id="header-text">FFFood</a>

        <nav id="nav-menu">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../templates/aboutUs.php">About us</a></li>
                <li><a href="../templates/gallery.php">Gallery</a></li>
                <li><a href="../templates/faq.php">FAQ</a></li>
                <li><a href="../templates/contact.php">Contact us</a></li>
                <li><button id="signIn"><a href="../auth/login.php">Sign in</a></button></li>
            </ul>
        </nav>

        <form method="post" action="../utilities/cart.php">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
            <input type="hidden" name="action" value="render">
            <button><img src="../templates/img/shopping-cart.png" alt=""></button>
        </form>
    </header><hr>
</body>
</html>
