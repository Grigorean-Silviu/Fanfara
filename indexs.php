<?php

$conn = mysqli_connect('internship.rankingcoach.com', 's.grigorean', 'LNUhpaktKZsKv4d', 's_grigorean', 13306) or die("connection Failed:" . mysqli_connect_error());

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
};

if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header('location:login.php');
};

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($select_cart) > 0){
        $message[] = 'product already added to cart!';
    }else{
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
        $message[] = 'product added to cart!';
    }

};






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopping cart</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/register.css">

</head>
<body>

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
            <a href="login.php" class="btn">login</a>
            <a href="register.php" class="option-btn">register</a>
            <a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="delete-btn">logout</a>
        </div>

    </div>




</div>

</body>
</html>