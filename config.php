<?php


$conn = mysqli_connect('internship.rankingcoach.com', 's.grigorean', 'LNUhpaktKZsKv4d', 's_grigorean', 13306) or die("connection Failed:" . mysqli_connect_error());


if (!$conn){
    echo "<script>alert('Conection Failed')</script>";
}




