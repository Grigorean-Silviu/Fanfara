<?php
// fusul orar
date_default_timezone_set('Europe/Bucharest');

// anul si luna
 if(isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // This month
    $ym = date('Y-m');
}


// Check format
$timestamp = strtotime($ym . '-01');

if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Today
$today = date('Y-m-d', time());


// title
$html_title = date('Y / m', $timestamp);

// Create prev & next month link
//strtotime
$prev = date('Y-m', strtotime('-1 month', $timestamp));

$next = date('Y-m', strtotime('+1 month', $timestamp));
// Or

//mktime(hour,minute,second,month,day,year)
//$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
//$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

// Number of days in the month
$day_count = date('t', $timestamp);
$last_prev_day = Date("t", strtotime("last day of previous month"));


// 0:Sun 1:Mon 2:Tue ...
//$str = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
$str = date('w', $timestamp);


// Create Calendar!!
$weeks = array();
$week = '';

// spatii goale cu zile din luna trecuta
$week .= str_repeat('', $str);
$n  = $str;

for ($i = $n; $i > 0; $i--) {
    $week.= '<td class="ignore">' . ($last_prev_day-$i+1) . ' </td>';
}

for ( $day = 1; $day <= $day_count; $day++, $str++) {
    if($day>9){
        $date = $ym . "-" . $day;
    }else{
        $date = $ym . "-0" . $day;
    }
    if ($today == $date) {
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';

    // End of the week OR End of the month
    if ($str % 7 == 6 || $day == $day_count) {
        if ($day == $day_count) {
            // spatii  cu zile ce urmeaza
            for ($j = 1; $j <= 6 - ($str % 7); $j++) {
                $week .= '<td class="ignore">' . $j;
            }
        }
        $weeks[] = '<tr>' . $week . '</tr>';
        // Prepare for new week
        $week = '';
    }
}
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <title>Calendar</title>

    <!-- link -->
    <link rel="stylesheet" type="text/css" href="assets/css/calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">

    <!-- meta -->
    <meta name="description" content="Calendar">
    <meta name="keywords" content="fanfara, instrumente pentru incepatori, teorie, practica, instrumente de suflat,magazin de instrumente, magazin pentru fanfara, calendar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/boostraq/css/bootstrap.css"   crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php include("navbar.php"); ?>

<div class="header container">
    <h1>Calendar</h1>
    <div class="topleft "><img class="cheiasol" src="assets/images/cheiasol.png" alt="cheia sol"></div>
</div>

<!-- Calendar -->
<div class="container">
    <h3><a href="?ym=<?php echo $prev; ?>"> < &nbsp;&nbsp;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&nbsp;&nbsp; ></a></h3>
    <h3><a href="calendar.php">Today</a> </h3>
    <table class="table table-bordered">
        <tr>
            <th>S</th>
            <th>M</th>
            <th>T</th>
            <th>W</th>
            <th>T</th>
            <th>F</th>
            <th>S</th>
        </tr>

        <?php
        foreach ($weeks as $week) {
            echo $week;
        }
        ?>
    </table>
</div>

<!-- footer -->
<?php include("footer.php"); ?>

</body>
</html>