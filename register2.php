<?php

$conn = mysqli_connect('internship.rankingcoach.com', 's.grigorean', 'LNUhpaktKZsKv4d', 's_grigorean', 13306) or die("connection Failed:" . mysqli_connect_error());
error_reporting(0);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =md5( $_POST['password']);
    $cpassword =md5( $_POST['cpassword']);

    if($password == $cpassword ){
        $sql = "INSERT INTO login (username, email, password)
                VALUE('$username','$email','$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "<script>elert('User Registration completed.')</script>";
        }else{
            echo "<script>elert('Something wrong.')</script>";
        }
    }else{
        echo "<script>elert('Password not Matched.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrer</title>

    <!-- css file -->
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>



<div class="form-container">
    <form action="" method="POST">
        <h3>Register now</h3>
        <input type="text" name="username"  required placeholder="enter username" value="<?php echo $username;?>"  class="box">
        <input type="email" name="email"  required placeholder="enter email" value="<?php echo $email;?>" class="box">
        <input type="password" name="password" required placeholder="enter password" value="<?php echo $_POST['password'];?>" class="box">
        <input type="password" name="cpassword" required placeholder="confirm password" value="<?php echo $_POST['cpassword'];?>" class="box">
        <input type="submit" name="submit"  class="btn" value="register now">
        <p>already have an account? <a href="login.php">Login now</a> </p>
    </form>
</div>

</body>
</html>
