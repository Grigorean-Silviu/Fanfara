<!doctype html>
<html lang="en">
<head>

    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Contact</title>

    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/column.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">

    <link rel="stylesheet" href="assets/js/contact.js">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/boostraq/css/bootstrap.css"   crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="assets/js/contact.js" defer></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php include("navbar.php"); ?>

<div class="header container">

    <h1>Contact</h1>
    <div class="topleft "><img class="cheiasol"  src="assets/images/cheiasol.png" alt="cheia sol"></div>

</div>

<div class="container">

<input type='text' id='q' placeholder='Write Something...'>
<br>
<button id='submit' onclick='submitText(q.value)'>Submit Text</button>
<div id='responsefield'>
</div>
</div>

<script>

    function submitText(q){

        var url = 'back-end.php?q='+q;

        var xhr = new XMLHttpRequest();

        xhr.open('GET', url, false);

        xhr.send();

        var response = xhr.response;

        responsefield.innerHTML = response;


    }

</script>



<!-- footer -->

<?php include("footer.php"); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>