<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
    <title>Contact us</title>
</head>
<body>
    <?php
        require '../components/Header.php';
    ?>

     <form class="contact-form">
        <h1>Contact us</h1>
        <div class="form-group">
            <input type="tel" class="form-control" name="tel" placeholder="Your Phone number:" require>
        </div>
        <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="Contact" name="Contact">
        </div>
    </form>

    <div class="frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d206469.57216616414!2d-5.901866258743543!3d54.598148733486916!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4860fffdd7d08a3b%3A0x2e57162cefc7c531!2sBelfast!5e1!3m2!1sen!2suk!4v1705405373495!5m2!1sen!2suk" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php
        require '../components/Footer.php';
    ?>

</body>
</html>