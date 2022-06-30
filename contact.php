<?php

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $text = $_POST['text'];
    $conn = mysqli_connect('internship.rankingcoach.com', 's.grigorean', 'LNUhpaktKZsKv4d', 's_grigorean', 13306) or die("connection Failed:" . mysqli_connect_error());
    // Database connection

    $select = mysqli_query($conn, "SELECT * FROM `contact` WHERE text = '$text'") or die('query failed');

    if(mysqli_num_rows($select) > 0){
        echo "<script>alert('Acest text a mai fost trimis de un utilizator')</script>";
    }else{
        mysqli_query($conn, "INSERT INTO `contact`(firstName, lastName, gender, email, number, text) VALUES ('$firstName','$lastName','$gender', '$email', '$number', '$text')") or die('query failed');
        echo "<script>alert('Textul a fost trimis')</script>";


    }


}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Contact</title>

    <!-- link -->
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">

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
    <div class="title1">Contact</div>
    <form action="" method="POST">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Numele</span>
                <input type="text" name="firstName" placeholder="ex. Grigorean"  required>
            </div>
            <div class="input-box">
                <span class="details">Prenumele</span>
                <input type="text" name="lastName" placeholder="ex. Silviu"  required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name="email" placeholder="ex. @gmail.com"  required>
            </div>
            <div class="input-box">
                <span class="details">Numarul de telefon</span>
                <input type="text" name="number" placeholder="ex. 0774021042"  required>
            </div>

            <div class="input-box" >
                <span class="details">Text</span>
                <input name="text" placeholder="Scrie ceva..." style="height:100px" required>
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