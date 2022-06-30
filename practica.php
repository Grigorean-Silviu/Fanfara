<?php

$conn = mysqli_connect('internship.rankingcoach.com', 's.grigorean', 'LNUhpaktKZsKv4d', 's_grigorean', 13306) or die("connection Failed:" . mysqli_connect_error());


session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:practica.php');
};

if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header('location:login.php');
};


?>
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
    <link rel="stylesheet" href="assets/css/register.css">

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

<?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}
?>

<div class="container">
    <div class="user-profile">

        <?php
        $select_user = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
        if(mysqli_num_rows($select_user) > 0){
            $fetch_user = mysqli_fetch_assoc($select_user);
        };
        ?>

        <p> username : <span><?php echo $fetch_user['name']; ?></span> </p>
        <p> email : <span><?php echo $fetch_user['email']; ?></span> </p>
        <div class="flex">
            <a href="login.php" class="btn1">login</a>
            <a href="registrer.php" class="option-btn">register</a>
            <a href="practica.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a>
        </div>

    </div>
</div>

<!-- footer -->
<?php include("footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>