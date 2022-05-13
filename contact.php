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
                    <a href="teorie.php">Teorie</a>
                    <a href="practica.php">Practica</a>
                    <a href="magazin.php">Magazin de instrumente</a>
                </div>
            </div>

            <a href="contact.php" class="active"><i class="fa fa-fw fa-envelope"></i>Contact</a>
            <a href="despre.php" ><i class="fa fa-fw fa-question-circle"></i>Despre</a>
            <a href="index.php" ><i class="fa fa-fw fa-home "></i>Acasa</a>
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

    <h1>Contact</h1>
    <div class="topleft "><img class="cheiasol"  src="assets/images/cheiasol.png" alt="cheia sol"></div>

</div>
<div class="container">



<form action="back-end.php" id="ajaxform" method="post">
        <input type="text" name="name" placeholder="Numele">
    <br>
        <input type="text" name="email" placeholder="email">
    <br>
       <input type="submit" name="submit" value="submit">

</form>



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