<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">


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
                    <a href="teorie.php">Teorie</a>
                    <a href="practica.php">Practica</a>
                    <a href="magazin.php">Magazin de instrumente</a>
                </div>
            </div>

            <a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
            <a href="despre.php"><i class="fa fa-fw fa-question-circle"></i>Despre</a>
            <a href="index.php" class="active"><i class="fa fa-fw fa-home "></i>Acasa</a>
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

</body>
</html>

