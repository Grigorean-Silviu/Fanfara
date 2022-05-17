<!DOCTYPE html>
<html lang="ro">
<head>
    <title>
        Quiz
    </title>
</head>
<body>
<?php
$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];
$ans3 = $_POST['ans3'];
$ans4 = $_POST['ans4'];
$correct = 0;
if(!empty($_POST)){
    if($ans1 == 13){
   $correct++;
}
    if($ans2 == 1){
        $correct++;
    }
    if($ans3 == 12){
        $correct++;
    }
    if($ans4 == 2){
        $correct++;
    }
    echo "<p>Ai raspuns corect la $correct intreebari</p>";
    $grade=($correct/4)*100;
    if($correct == 0){
        echo " <p>Nu ai trecut </p>";
    }elseif($correct == 1){
        echo "<p>Trebuie sa repeti mai mult prinzaturile la instrument</p>";
    }elseif ($correct == 2){
        echo "<p>Poti mai mult de atat </p>";
    }elseif ($correct == 3){
        echo "<p>Te descurci</p>";
    }elseif ($correct == 4){
        echo "<p>Foarte bine</p>";
    }
}

?>
<form action="fn.php" method="post">

    <p>Cu ce clape/clapa se prinde nota Mi</p>
    <input type="number" name="ans1">
    <p>Cu ce clape/clapa se prinde nota Fa</p>
    <input type="number" name="ans2">
    <p>Cu ce clape/clapa se prinde nota La</p>
    <input type="number" name="ans3">
    <p>Cu ce clape/clapa se prinde nota Si</p>
    <input type="number" name="ans4">
    <br><br>
    <input type="submit">

</form>
</body>
</html>