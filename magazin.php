<?php

$conn = mysqli_connect('internship.rankingcoach.com', 's.grigorean', 'LNUhpaktKZsKv4d', 's_grigorean', 13306) or die("connection Failed:" . mysqli_connect_error());

session_start();

$user_id = $_SESSION['user_id'];/* id-ul utilizatorului logat */


if(!isset($user_id)){
    header('location:magazin.php');
};

if(isset($_GET['logout'])){
    unset($user_id);
    session_destroy();
    header('location:login.php');/*utilizatorul este scos*/
};

if(isset($_POST['add_to_cart'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if(mysqli_num_rows($select_cart) > 0){
        $message[] = 'Produsul este deja adaugat in cos!';
    }else{
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
        $message[] = 'Produsul a fost adaugat!';
    }

};

if(isset($_POST['update_cart'])){
    $update_quantity = $_POST['cart_quantity'];
    $update_id = $_POST['cart_id'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
    $message[] = 'cart quantity updated successfully!';
}

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
    header('location:magazin.php');
}

if(isset($_GET['delete_all'])){
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:magazin.php');
}

?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Magazin instrument muzicale</title>

    <!-- link -->
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/register.css">

    <!-- meta -->
    <meta name="description" content=" magazin online pentru instruente de fanfara cat si acecesorii de curatat instrumentele">
    <meta name="keywords" content="fanfara, instrumente pentru incepatori, teorie,ulei pentru instrumente, practica, instrumente de suflat,magazin de instrumente, magazin pentru fanfara">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/boostraq/css/bootstrap.css"   crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<?php include("navbar.php"); ?>

<div class="header container">

    <h1>Magazin pentru instrumente</h1>
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
            <a href="magazin.php?logout=<?php echo $user_id; ?>" onclick="return confirm('Esti sigur ca vrei sa iesi?');" class="delete-btn">logout</a>
        </div>

    </div>

    <div class="products">

        <h1 class="heading">latest products</h1>

        <div class="box-container">

            <?php
            $select_product = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
            if(mysqli_num_rows($select_product) > 0){
                while($fetch_product = mysqli_fetch_assoc($select_product)){
                    ?>
                    <form method="post" class="box" action="">
                        <img src="./assets/images/<?php echo $fetch_product['image']; ?>" alt="#">
                        <div class="name"><?php echo $fetch_product['name']; ?></div>
                        <div class="price">$<?php echo $fetch_product['price']; ?></div>
                        <input type="number" min="1" name="product_quantity" value="1">
                        <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                        <input type="submit" value="add to cart" name="add_to_cart" class="btn1">
                    </form>
                    <?php
                };
            };
            ?>

        </div>

    </div>

    <div class="shopping-cart">

        <h1 class="heading">shopping cart</h1>

        <table>
            <thead>
            <th>image</th>
            <th>name</th>
            <th>price</th>
            <th>quantity</th>
            <th>total price</th>
            <th>action</th>
            </thead>
            <tbody>
            <?php
            $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
            $grand_total = 0;
            if(mysqli_num_rows($cart_query) > 0){
                while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                    ?>
                    <tr>
                        <td><img src="./assets/images/<?php echo $fetch_cart['image']; ?>" height="100" alt="#"></td>
                        <td><?php echo $fetch_cart['name']; ?></td>
                        <td>$<?php echo $fetch_cart['price']; ?></td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                                <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                                <input type="submit" name="update_cart" value="update" class="option-btn">
                            </form>
                        </td>
                        <td>$<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
                        <td><a href="magazin.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('Doresti sa stergi din cos?');">remove</a></td>
                    </tr>
                    <?php
                    $grand_total += $sub_total;
                }
            }else{
                echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
            }
            ?>
            <tr class="table-bottom">
                <td colspan="4">grand total :</td>
                <td>$<?php echo $grand_total; ?></td>
                <td><a href="magazin.php?delete_all" onclick="return confirm('Doresti sa stergi tot din cos?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">delete all</a></td>

            </tr>
            </tbody>
        </table>

        <div class="cart-btn">
            <a href="#" class="btn1 <?php echo ($grand_total > 1)?'':'disabled'; ?>">proceed to checkout</a> /*Daca $grand_total nu e > 1 => disable*/
        </div>

    </div>

</div>


<!-- footer -->
<?php include("footer.php"); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>