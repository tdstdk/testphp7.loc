<?php
/**
 * Created by PhpStorm.
 * Date: 26.07.18
 * Time: 22:18
 */

$year = date('Y');
$month = date('m');
$week_number = date('W', strtotime($year.$month.'01'));
echo '<pre>';
echo 'Пн Вт Ср Чт Пт Сб Вс<br>';
for ($week = $week_number; $week <= $week_number + 5; $week++) {
    for ($day_week = 1; $day_week <= 7; $day_week++) {
        $month_from = date('m', strtotime($year.'W'.$week.$day_week));
        $day = date('d', strtotime($year.'W'.$week.$day_week));
        if ($month == $month_from) echo $day.' ';
        else echo '   ';
    }
    echo '<br>';
}
echo '</pre>';
