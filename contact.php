<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Inregistrare</title>

    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">

    <meta name="description" content="Contact magazin de instrumente pentru fanfara">
    <meta name="keywords" content="fanfara, instrumente pentru incepatori, teorie, practica, instrumente de suflat,magazin de instrumente, magazin pentru fanfara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div class="container">
    <div class="title">Inregistrare</div>
    <form action="#">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Numele</span>
                <input type="text" placeholder="ex. Grigorean Silviu" required>
            </div>
            <div class="input-box">
                <span class="details">Numele de utilizator</span>
                <input type="text" placeholder="ex. Grigorean Silviu" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="ex. @gmail.com" required>
            </div>
            <div class="input-box">
                <span class="details">Numarul de telefon</span>
                <input type="text" placeholder="ex. 0774021042" required>
            </div>
            <div class="input-box">
                <span class="details">Parola</span>
                <input type="text" placeholder="Scrie o parola" required>
            </div>
            <div class="input-box">
                <span class="details">Comfirma Parola</span>
                <input type="text" placeholder="Rescrie Parola" required>
            </div>
        </div>
        <div class="gender-details">
            <input type="radio" name="gender" id="dot-1">
            <input type="radio" name="gender" id="dot-2">
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
            <input type="submit" value="Register">
        </div>
    </form>
</div>
</body>
</html>