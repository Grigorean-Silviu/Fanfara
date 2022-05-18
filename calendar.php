<?php
$month_numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);
$months_of_year = array("January","February","March","April","May","June","July","August","September","October","November","December");
$days_of_week = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
$month = ($_GET['m']) ? $_GET['m'] : date("n");
$current_month = date("n");
$year = ($_GET['y']) ? $_GET['y'] : date("Y");
$current_year = date("Y");
$previous_month = ($month - 1);
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
$month_name = $months_of_year[$month - 1];
$first_day_of_month = new DateTime();
$first_day_of_month -> setDate($year,$month,1);
$first_day_of_month = $first_day_of_month -> format("w");
echo("<form name = 'formCalendar' id = 'formCalendar' action = 'index.php?' method = 'get'>");
echo("  <table border = '1' cellspacing = '0' cellpadding = '2'>");
echo("    <thcolspan = '7'>
            {$month_name} {$year}
            <span class = 'formTopRight'>
              <input type = 'button' value = 'Today' onclick = 'location=\"index.php?m={$current_month}&y={$current_year}\"'/>
              <select name = 'm' id = 'selMonth'>");
for($a = 0; $a < count($months_of_year); $a++)
{
    echo("        <option value = '{$month_numbers[$a]}'>{$months_of_year[$a]}</option>");
}
echo("        </select>");
echo("        <select name = 'y' id = 'selYear'>");
for($b = ($current_year - 10); $b <= ($current_year + 10); $b++)
{
    echo("        <option value = '{$b}'>{$b}</option>");
}
echo("        </select>");
echo("        <input type = 'submit' name = 'dateChange' id = 'dateChange' value = 'Go'/>");
echo("        <input type = 'button' name = 'prev' value = '<<' onclick = 'location=\"index.php?m={$previous_month}&y={$year}\"'/>");
echo("        <input type = 'button' name = 'next' value = '>>' onclick = 'location=\"index.php?m={$next_month}&y={$year}\"'/>");
echo("  </table>");
echo("<form>");
?>


