<?php
/**
 * Created by PhpStorm.
 * Date: 28.07.18
 * Time: 21:40
 */

//method 1
function sum1(...$arr) {
    $value_res = 0;
    foreach ($arr as $value) {
        $value_res = $value_res + $value;
    }
    return $value_res;
}

//method 2
function sum2(...$arr) {
    return array_sum($arr);
}

echo sum1(50, 20, 15).'<br>';
echo sum1(5, 2, 15).'<br>';
echo '<br>';
echo sum2(50, 20, 15).'<br>';
echo sum2(5, 2, 15).'<br>';
