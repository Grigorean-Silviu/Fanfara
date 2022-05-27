<?php
// fusul orar
date_default_timezone_set('Europe/Bucharest');

// prev & next month
if (isset($_GET['ym'])) {
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

//use strtotime!
 $prev = date('Y-m', strtotime('-1 month', $timestamp));

 $next = date('Y-m', strtotime('+1 month', $timestamp));

           // Or

//->  mktime(hour,minute,second,month,day,year)
//$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
//$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

// Number of days in the month
$day_count = date('t', $timestamp);

$last_prev_day = Date("t", strtotime("first day of previous month"));

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


    $date = $ym . "-" . $day;

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
            for ($j = 1; $j <=6 - ($str % 7) ; $j++) {

                $week .= '<td class="ignore">' . ${j};}

        }

        $weeks[] = '<tr>' . $week . '</tr>';

        // Prepare for new week
        $week = '';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calendar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="assets/css/calendar.css">

</head>
<body>
<div class="container">
    <h3><a href="?ym=<?php echo $prev; ?>"> < &nbsp;&nbsp;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&nbsp;&nbsp; ></a></h3>
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
</body>
</html>