<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Contact</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/column.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="assets/css/table.css">
    <link rel="stylesheet" type="text/css" href="assets/css/side_nav.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/boostraq/css/bootstrap.css"   crossorigin="anonymous">

    <meta name="description" content="Contact magazin de instrumente pentru fanfara">
    <meta name="keywords" content="fanfara, instrumente pentru incepatori, teorie, practica, instrumente de suflat,magazin de instrumente, magazin pentru fanfara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
    <div class="container">

        <img class="imagine navbar-brand mb-0 h1" style="width: 48px" src="assets/images/logo.png" alt="logo" />

        <button
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                class="navbar-toggler"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">


                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle"
                       id="navbarDropdown " role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">Contul meu</a>
                    <ul class="dropdown-menu "  aria-labelledby="navbarDropdown ">
                        <li>
                            <a href="#" class="dropdown-item">Intra in cont</a>
                        </li>
                        <li>
                            <a href="teorie.php" class="dropdown-item">Teorie</a>
                        </li>
                        <li>
                            <a href="practica.php" class="dropdown-item">Practica</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item active">
                    <a href="contact.php" class="nav-link ">Contact</a>
                </li>
                <li class="nav-item active">
                    <a href="despre.php" class="nav-link ">Despre</a>
                </li>

                <li class="nav-item active">
                    <a href="index.php" class="nav-link ">Acasa</a>
                </li>
            </ul>
        </div>

    </div>
</nav>



<div class="header container">

    <h1>Contact</h1>
    <div class="topleft "><img class="cheiasol" style="width: 48px" src="assets/images/cheiasol.png" alt="cheia sol"></div>

</div>


<address class="container">
    Mail <a href="mailto:silviu.grigorean01@e-uvt.ro">Grigorean Silviu</a><br>
    Visit us at:<br>
    Example.com<br>
</address>

<!-- footer -->
<footer class="footer-dark">
    <div class="footer-container">
        <div class="first width-33">
            <h4 class="title">Navigare</h4>
            <ul class="colfirst">
                <li><a href="index.php">Acasa</a></li>
                <li><a href="despre.php">Despre</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

        </div>

        <div class="second width-33">
            <h4 class="title">Invata</h4>
            <ul class="col">

                <li><a href="teorie.php">Teorie</a></li>
                <li><a href="practica.php">Practica</a></li>

            </ul>
        </div>

        <div class="third width-33">
            <h4 class="title">Company Name</h4></div>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>