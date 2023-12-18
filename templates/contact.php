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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73968.60266643367!2d-6.009032133640537!3d54.59485202034192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4860fffdd7d08a3b%3A0x2e57162cefc7c531!2z0JHQtdC70YTQsNGB0YI!5e0!3m2!1sru!2suk!4v1700505735506!5m2!1sru!2suk" width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <?php
        require '../components/Footer.php';
    ?>

</body>
</html>