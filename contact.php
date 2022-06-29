
<!DOCTYPE html>
<html lang="ro">
<head>
    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Contact</title>

    <!-- link -->
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/calendar.css">

    <!-- meta -->
    <meta name="description" content="Contact magazin de instrumente pentru fanfara">
    <meta name="keywords" content="fanfara, instrumente pentru incepatori, teorie, practica, instrumente de suflat,magazin de instrumente, magazin pentru fanfara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php include("navbar.php"); ?>

<div class="header container">
    <h1>Contact</h1>
    <div class="topleft "><img class="cheiasol" src="assets/images/cheiasol.png" alt="cheia sol"></div>
</div>

<!-- Form -->
<div class="container">
    <div class="title1">Inregistrare</div>
    <form action="" method="POST">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Numele</span>
                <input type="text" name="username" placeholder="ex. Grigorean" value="<?php echo $username;?>" required>
            </div>
            <div class="input-box">
                <span class="details">Prenumele</span>
                <input type="text" name="firstName" placeholder="ex. Silviu" value="" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name="email" placeholder="ex. @gmail.com" value="<?php echo $email;?>" required>
            </div>
            <div class="input-box">
                <span class="details">Numarul de telefon</span>
                <input type="number" name="number" placeholder="ex. 0774021042" value="" required>
            </div>
            <div class="input-box">
                <span class="details">Parola</span>
                <input type="password" name="password" placeholder="Scrie o parola" value="<?php echo $_POST['password'];?>" required>
            </div>
            <div class="input-box">
                <span class="details">Comfirma Parola</span>
                <input type="password" name="cpassword" placeholder="Rescrie Parola" value="<?php echo $_POST['cpassword'];?>" required>
            </div>
        </div>
        <div class="gender-details">
            <input type="radio" name="gender"  id="dot-1" value="m" required>
            <input type="radio" name="gender" id="dot-2" value="f" required>
            <span class="gender-title">Gen</span>
            <div class="category">
                <label for="dot-1">
                    <span class="dot one"></span>
                    <span class="gender">Masculin</span>
                </label>
                <label for="dot-2">
                    <span class="dot two"></span>
                    <span class="gender">Feminin</span>
                </label>
            </div>
        </div>
        <div class="button">
            <input type="submit" name="submit" value="Submit" required>
        </div>
    </form>
</div>

<!-- footer -->
<?php include("footer.php"); ?>

</body>
</html>