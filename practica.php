
<!doctype html>
<html lang="en">
<head>
    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Practica</title>

    <!-- link -->
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/column.css">

    <link rel="stylesheet" type="text/css" href="assets/css/practica.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/boostraq/css/bootstrap.css"   crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- meta -->
    <meta name="description" content="teorie si practica la instrumente pentru incepatori">
    <meta name="keywords" content="fanfara, instrumente pentru incepatori, teorie, practica, instrumente de suflat,magazin de instrumente, magazin pentru fanfara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php include("navbar.php"); ?>

<div class="header container">
    <h1>Practica</h1>
    <div class="topleft "><img class="cheiasol"  src="assets/images/cheiasol.png" alt="cheia sol"></div>
</div>

<div class="container">
<div class="quiz-container" id="quiz">
    <div class="quiz-header">
        <h2 id="question">Question Text</h2>
        <ul class="text-center">
            <li>
                <input type="radio" name="answer" id="a" class="answer">
                <label for="a" id="a_text">Answer</label>
            </li>

            <li>
                <input type="radio" name="answer" id="b" class="answer">
                <label for="b" id="b_text">Answer</label>
            </li>

            <li>
                <input type="radio" name="answer" id="c" class="answer">
                <label for="c" id="c_text">Answer</label>
            </li>

            <li>
                <input type="radio" name="answer" id="d" class="answer">
                <label for="d" id="d_text">Answer</label>
            </li>

        </ul>
    </div>

    <button id="submit" >Submit</button>


</div>
</div>

<!-- footer -->
<?php include("footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/practica.js"></script>
</body>
</html>