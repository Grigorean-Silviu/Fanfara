<?php $activePage = basename($_SERVER['PHP_SELF'], ".php");  ?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Practica si teorie pentru muzica de fanafara</title>

    <!-- link -->
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/column.css">

    <!-- meta -->
    <meta name="description" content="teorie si practica la instrumente pentru incepatori">
    <meta name="keywords" content="fanfara, instrumente pentru incepatori, teorie, practica, instrumente de suflat,magazin de instrumente, magazin pentru fanfara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/boostraq/css/bootstrap.css"   crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="topnav" id="myTopnav">
    <div class="container">
        <div class="dem">
            <img class="imagine" src="assets/images/logo.png" alt="Trumpet">
            <div class="dropdown">
                <button class="dropbtn">Dropdown
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="teorie.php">Teorie</a>
                    <a href="practica.php">Practica</a>
                    <a href="magazin.php">Magazin de instrumente</a>
                </div>
            </div>

            <a <?php if($activePage  == 'contact') {echo 'class="active"';}?> href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
            <a <?php if($activePage  == 'despre') {echo 'class="active"';}?> href="despre.php"><i class="fa fa-fw fa-question-circle"></i>Despre</a>
            <a <?php if($activePage  == 'index') {echo 'class="active"';}?> href="index.php" ><i class="fa fa-fw fa-home "></i>Acasa</a>
            <a <?php if($activePage  == 'calendar') {echo 'class="active"';}?> href="calendar.php"><i class="fa fa-calendar"></i></a>

        </div>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-music"></i>
    </a>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
