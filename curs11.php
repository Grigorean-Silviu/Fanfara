<html>
<head>
    <title>PHP File create/write Example</title>
</head>
<body>

<FORM method="POST">

    Enter your name and the name from whom you extracted data. : <input type="text" name="name"> <br/>
    <br/>
    <input type="submit" name="Submit1" value="Write File">
</FORM>
<?php

if(isset($_POST['Submit1']))
{ $data = file_get_contents('http://p_ruhstrat.internship.rankingcoach.com/assets/php/calendar.php');
//open file abc.txt in append mode

    $myfile = fopen("transmit.html", "w");



    fwrite($myfile, $data);

    $text = $_POST["name"];

    fwrite($myfile, $text);

    fclose($myfile);
}

?>