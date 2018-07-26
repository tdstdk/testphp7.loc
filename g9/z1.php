<?php
/**
 * Created by PhpStorm.
 * Date: 26.07.18
 * Time: 14:56
 */

$end = 10;
$val = 0;
$rez = 1;
$arr = [0, 1];
for ($i = 1; $i < $end-1; $i++) {
    $rez = $arr[$i-1] + $arr[$i];
    $arr[] = $rez;
    echo $rez.' ';
}

include_once "../classes/PrintResult.php";
new PrintResult($arr);