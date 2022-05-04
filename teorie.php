<!DOCTYPE html>
<html lang="ro">
<head>

    <title>Teorie</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/column.css">

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
                    <a href="inregistrare.php">Intra in cont</a>

                    <a href="practica.php">Practica</a>
                    <a href="magazin.php">Magazin de instrumente</a>
                </div>
            </div>

            <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
            <a href="despre.php"><i class="fa fa-fw fa-question-circle"></i>Despre</a>
            <a href="index.php"><i class="fa fa-fw fa-home "></i>Acasa</a>
            <a href="#"><i class="fa fa-search"></i></a>
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


<div class="header container">

    <h1>Teorie</h1>
    <div class="topleft "><img class="cheiasol" src="assets/images/cheiasol.png" alt="cheia sol"></div>

</div>

<!-- footer -->

<footer class="footer-dark">

    <div class="footer-container">
        <div class="first width-33">
            <h4 class="title">Navigare</h4>
            <ul class="colfirst">

                <li><a href="index.php"><i class="fa fa-fw fa-home"></i>Acasa</a></li>
                <li><a href="despre.php"><i class="fa fa-fw fa-question-circle"></i>Despre</a></li>
                <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a></li>

            </ul>

        </div>

        <div class="second width-33">
            <h4 class="title">Invata</h4>
            <ul class="col">

                <li><a href="teorie.php"><i class="fa fa-fw fa-book"></i>Teorie</a></li>
                <li><a href="practica.php"><i class="fa fa-check-square-o"></i>Practica</a></li>

            </ul>
        </div>

        <div class="third width-33">
            <h4 class="title">Company Name</h4></div>

    </div>

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>