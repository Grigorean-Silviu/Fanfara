<?php
include 'config.php';
$conn = mysqli_connect('internship.rankingcoach.com', 's.grigorean', 'LNUhpaktKZsKv4d', 's_grigorean', 13306) or die("connection Failed:" . mysqli_connect_error());

if (isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$password'") or die('query failed');


    if(mysqli_num_rows($select) > 0){
        echo "<script>alert('user already exist.')</script>";
    }else{
        mysqli_query($conn, "INSERT INTO `user_form`(name, email, password) VALUES ('$name','$email','$password')") or die('query failed');
        $message[] = 'registred successfully!';
        header('location:login.php');

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Registrer</title>

    <!-- css file -->
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>

<?php

if (isset($message)){
    foreach ($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}
?>



<div class="form-container">
    <form action="" method="POST">
        <h3>Register now</h3>
        <input type="text" name="name"  required placeholder="enter username" class="box">
        <input type="email" name="email"  required placeholder="enter email" class="box">
        <input type="password" name="password" required placeholder="enter password" class="box">
        <input type="password" name="cpassword" required placeholder="confirm password" class="box">
        <input type="submit" name="submit"  class="btn1" value="register now">
        <p>already have an account? <a href="login.php">Login now</a> </p>
    </form>
</div>

</body>
</html>
