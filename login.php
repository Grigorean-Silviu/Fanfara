<?php

$conn = mysqli_connect('internship.rankingcoach.com', 's.grigorean', 'LNUhpaktKZsKv4d', 's_grigorean', 13306) or die("connection Failed:" . mysqli_connect_error());


session_start();/*creează o sesiune sau o reia pe cea curentă pe baza unui identificator de sesiune transmis printr-o solicitare GET sau POST*/

if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password'])); /* md5() - Returns the hash as a 32-character hexadecimal number.*/

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if(mysqli_num_rows($select) > 0){  /*verificam daca exista utilizatorul */
        $row = mysqli_fetch_assoc($select); /* va lua sectiunea */
        $_SESSION['user_id'] = $row['id'];
        header('location:magazin.php');
    }else{
        $message[] = 'incorrect password or email!';
    }

}

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Login</title>

    <!--  link  -->
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/register.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/boostraq/css/bootstrap.css"   crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<?php include("navbar.php"); ?>

<div class="header container">

    <h1>Login</h1>
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
<div class="form-container">

    <form action="#" method="post">
        <h3>login now</h3>
        <input type="email" name="email" required placeholder="email" class="box">
        <input type="password" name="password" required placeholder="password" class="box">
        <input type="submit" name="submit" class="btn1" value="login now">
        <p>Nu ai un cont? <a href="registrer.php">Inregistreaza-te</a></p>
    </form>

</div>
</div>

<!-- footer -->
<?php include("footer.php"); ?>

</body>
</html>