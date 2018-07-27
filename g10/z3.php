<?php
/**
 * Created by PhpStorm.
 * Date: 27.07.18
 * Time: 20:10
 */

$arr = ['fst', 'snd', 'thd', 'fth', 'snd', 'thd'];
$arr_res = [];

//method 1
foreach ($arr as $value) {
    if (!in_array($value, $arr_res)) $arr_res[] = $value;
}

//method 2
$arr_res = array_unique($arr);

include_once '../classes/PrintResult.php';
new PrintResult($arr_res);
new PrintResult($arr_res);