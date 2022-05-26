<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<table cellspacing="0" cellpadding="0" border="0" width="100%" class="view-calendar">
    <tr>
        <td valign="top" width="14.2857%">Mondag</td>
        <td valign="top" width="14.2857%">Tuesday</td>
        <td valign="top" width="14.2857%">Wednesday</td>
        <td valign="top" width="14.2857%">Thursday</td>
        <td valign="top" width="14.2857%">Friday</td>
        <td valign="top" width="14.2857%">Saturday</td>
        <td valign="top" width="14.2857%">Sunday</td>
    </tr>

    <?php
    // Get current month dates
    $days_count = date('t');

    $current_day = date('d');

    // save time of first day for later use
    $time_first_day_of_month = mktime(0, 0, 0, date('m'), 1, date('Y'));
    $week_day_first = date('N', $time_first_day_of_month);

    // Get next month dates
    $next_start = strtotime(date("Y-m-00", strtotime("+1 month")));

    $next_dates = array();

    for ($w = 1 - $week_day_first + 1; $w <= $days_count; $w = $w + 7){
        echo '<tr>';
        $counter = 0;
        for ($d = $w; $d <= $w + 6; $d++){
            if($d < 10){
                $current_date = date("Y").date("m").'0'.$d;
            }else{
                $current_date = date("Y").date("m").$d;
            }
            echo '<td valign="top" width="14.2857%"'.(($d > 0 ? ($d > $days_count ? ' class="disabled"' : '') : ' class="disabled"')).(($counter > 4 ? ' class="week-day"' : '')).'>';
            if($d > 0){
                // next month's dates
                if($d > $days_count){
                    for($in = 1; $in <= 1; $in++){
                        echo array_push($next_dates, date('j', strtotime("+ $in day", $next_start)));
                    }
                }
                // today
                else if($current_day == $d){
                    echo '<div class="current-day"><span class="given-date">'.$d.'</span></div>';
                }
                // this month's dates
                else{
                    echo '<span class="given-date">'.$d.'</span>';
                }
            }
            // last month's dates
            else{
                //Here comes previous dates
                $offset = $d - 1;
                echo '<span class="given-date">'.date('d', strtotime("$offset day",$time_first_day_of_month)).'</span>';
            }
            echo '</td>';
            $counter++;
        }
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>

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


$week .= str_repeat('<td></td>', $str);



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
            // spatii goale cu zile ce urmeaza
            for ($j = 1; $j <=6 - ($str % 7) ; $j++) {

                $week .= '<td class="lunaviitoare">' . ${j};}

        }

        $weeks[] = '<tr>' . $week . '</tr>';

        // Prepare for new week
        $week = '';
    }

}
?>