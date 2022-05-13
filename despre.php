<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Despre</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/despre.css">
    <link rel="stylesheet" type="text/css" href="assets/css/column.css">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/boostraq/css/bootstrap.css"   crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="description"
          content="Tot ce trebuie sa stii despre teoria si practica la instrumentele de fanfara sau de suflat">
    <meta name="keywords"
          content="fanfara, instrumente pentru incepatori, teorie, practica, instrumente de suflat,magazin de instrumente, magazin pentru fanfara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <a href="despre.php" class="active"><i class="fa fa-fw fa-question-circle"></i>Despre</a>
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
    <h1>Despre</h1>
    <div class="topleft"><img class="cheiasol" src="assets/images/cheiasol.png" alt="cheia sol"></div>
</div>
<section class="container">
    <?php
    echo "<h1>Istoria Instrumentelor</h1>";
    echo "<h2>Instrumentele muzicale sunt utilizate în interpretarea compozițiilor muzicale și sunt de obicei clasificate în
        patru
        mari grupe tradiționale: cu coarde, suflători din lemn, suflători din alamă și instrumente de percuție, la care
        se
        adaugă suflători cu structură complexă și instrumentele electronice. Acestea se folosesc pentru a crea muzica,
        fiind
        făcute din plastic, sârma, pânza etc.
    </h2>";
    ?>
</section>
<div class="container">
    <img class="center" src="assets/images/fanf.jpg" alt="ciocarlia">
</div>


<section>
    <div class="container">
        <?php
        echo "<h1>Istoria Muzicii</h1>";
        echo "<h2>Antichitate: s-au păstrat puține exemple de compoziții. Acestea sunt bazate pe moduri. Instrumentele
            reprezentative
            ale Greciei Antice sunt lira (cu care este reprezentat Apollo) și aulos (vedeți figura). Pitagora (aprox.
            570 î.Hr.
            - 495 î.Hr.) a considerat că esența muzicii este dată de rapoarte de numere simple proporționale cu lungimea
            coardelor monocordului pentru diferite note.
            Evul Mediu (500-1400): cântul bizantin și gregorian domină discursul muzical. Leonin, un compozitor asociat
            cu
            catedrala Notre Dame din Paris, a organizat aproximativ în anul 1200 primul cor pe mai multe voci.[6] Pentru
            următorii 400 de ani acesta a fost principalul mod de exprimare muzicală. [7] Instrumentele muzicale
            importante au
            fost orga (inițial portabilă, de proveniența bizantină) și lăuta (utilizată în muzica laică, de exemplu de
            trubaduri).
            Renaștere (1400-1600): muzica vocală corală domină. Vocile sunt combinate în feluri din ce în ce mai
            complicate.
            Cântul gregorian stă la baza unei voci, nu a întregii compoziții polifonice.
            Baroc (1600-1750): muzica rămâne polifonică, dar devine tonală (se trece de la moduri la game).
            Instrumentele din
            familia viorii sunt perfecționate și muzica instrumentală se dezvoltă mult. În tradiția vocală apare opera.
            Jean-Philippe Rameau (1683-1764) a considerat că esența muzicii constă în combinarea vibrației coardelor cu
            o
            frecvență invers proporțională cu lungimea acestora.
            Perioada clasică și romantică (1750-1910): muzica rămâne tonală, dar devine omofonă. Pianul capătă o
            importanță
            deosebită.
            Secolul XX: Noi experiențe muzicale atonale, neoclasicism, jazz, blues, rock, etc. La începutul secolului al
            XX-lea,
            Ernst Kurth (1886-1946) a propus idea conform căreia muzica este în primul rând o senzație psihologică.
            În România au fost compuse imnuri la mănăstirea Cozia în secolele al XIV-lea și al XV-lea. Muzica laică a
            fost
            cultivată din secolul al XVII-lea la curțile domnești din București și Iași. Conservatorul de Muzică și
            Declamație,
            cu filiale la București și Iași, a fost înființat în anul 1864.
        </h2>";
        ?>

        <img class="center1" src="assets/images/logo.png" alt="logo">
    </div>
</section>

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
