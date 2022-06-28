

<!doctype html>
<html lang="en">
<head>

    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Shopping</title>

    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/css/column.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index_shopping.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/boostraq/css/bootstrap.css"   crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<?php include("navbar.php"); ?>

<div class="header container">

    <h1>Shopping</h1>
    <div class="topleft "><img class="cheiasol"  src="assets/images/cheiasol.png" alt="cheia sol"></div>

</div>

<div class="container">
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
            <form action="index_shopping.php" method="post">
                 <div class="card shadow">
                   <div>
                       <img class="img-fluid card-img-top" src="assets/upload/produs1.png" alt="imagine1" >
                   </div>
                   <div class="card-body">
                     <h5 class="card-title">
                         Produs1
                     </h5>
                       <h6>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star-half"></i>
                           <i class="far fa-star"></i>
                       </h6>
                       <p class="card-text">
                           Produse de curatat instrumentul
                       </p>
                       <h5>
                           <small><s class="text-secondary">150 lei</s></small>
                           <span class="price">119 lei</span>
                       </h5>

                       <button type="submit" class="btn btn-warning my-3" name="add">Adauga <i class="fas fa-shopping-cart"></i> </button>
                   </div>
                 </div>
            </form>
        </div>


</div>

<!-- footer -->

<?php include("footer.php"); ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>