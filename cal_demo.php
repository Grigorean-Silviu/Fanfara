<style>
    table  {
        border:1px solid #aaa;
        border-collapse:collapse;
        background-color:#fff;
        font-family: Verdana;
        font-size:12px;
    }

    th {
        background-color:#777;
        color:#fff;
        height:32px;
    }

    td {
        border:1px solid #ccc;
        height:32px;
        width:32px;
        text-align:center;
    }

    td.red {
        color:red;
    }

    td.bg-yellow {
        background-color:#ffffe0;
    }

    td.bg-orange {
        background-color:#ffa500;
    }

    td.bg-grey {
        background-color: #b0a4a4;
    }

    td.bg-white {
        background-color:#fff;
    }

    td.bg-blue {
        background-color:#add8e6;
    }

    a {
        color: #333;
        text-decoration:none;

    }
</style>


<table>
    <?php
    // Get the current date
    $date = getdate();

    // Get the value of day, month, year
    $mday = $date['mday']; // 18 (mai)
    $mon = $date['mon'];//(ian , feb ...)=5
    $wday = $date['wday'];//weekend day (0 pentru Duminica pana la 6 pentru Sambata) = 3
    $month = $date['month'];// May
    $year = $date['year'];

    /*$previous_month = ($month - 1);
    $previous_year = $year;
    $next_month = ($month + 1);
    if($month == 0)
    {
        $month = 12;
        $year--;
    }
    if($month == 13)
    {
        $month = 1;
        $year++;
    }
    if($previous_month == 0)
    {
        $previous_month = 12;
        $previous_year--;
    }*/

    $dayCount = $wday; // Numarul de zile =3
    $day = $mday; // day=18


    while($day > 0) {
        $days[$day--] = $dayCount--;
        if($dayCount < 0)
            $dayCount = 6;
    }// potitiile pentru zilele < decat ziua de azi

//Care varianta de zi pentru luna aceasta este adevarata
    if(checkdate($mon,31,$year))
        $lastDay = 31;
    elseif(checkdate($mon,30,$year))
        $lastDay = 30;
    elseif(checkdate($mon,29,$year))
        $lastDay = 29;
    elseif(checkdate($mon,28,$year))
        $lastDay = 28;

    while($day <= $lastDay) {
        $days[$day++] = $dayCount++;
        if($dayCount > 6)
            $dayCount = 0;
    }// potitiile pentru zilele > decat ziua de azi



// Preimele doua linii ale calendarului
    echo("<tr>");
    echo("<th colspan='7'>$month $year</th>");
    echo("</tr>");
    echo("<tr>");
    echo("<td class='red bg-yellow'>Sun</td>");
    echo("<td class='bg-yellow'>Mon</td>");
    echo("<td class='bg-yellow'>Tue</td>");
    echo("<td class='bg-yellow'>Wed</td>");
    echo("<td class='bg-yellow'>Thu</td>");
    echo("<td class='bg-yellow'>Fri</td>");
    echo("<td class='red bg-yellow'>Sat</td>");
    echo("</tr>");

    $startDay = 0;
    $d = $days[1];

    echo("<tr>");
    while($startDay < $d) {
        echo("<td></td>");
        $startDay++;
    }

    for ($d=1;$d<=$lastDay;$d++) {
        if ($mday > $d)
            $bg = "bg-grey";
        else
            $bg = "bg-white";

        if($d == $mday)
            echo("<td class='bg-blue'><a href='#' title='Detail of day'>$d</a></td>");
        else
            echo("<td class='$bg'><a href='#' title='Detail of day'>$d</a></td>");


        $startDay++;
        if($startDay > 6 && $d < $lastDay){
            $startDay = 0;
            echo("</tr>");
            echo("<tr>");
        }
    }
    echo("</tr>");
    ?>
</table>