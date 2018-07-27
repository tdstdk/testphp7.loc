<?php
/**
 * Created by PhpStorm.
 * Date: 27.07.18
 * Time: 20:10
 */

$arr = ['fst' => 1, 'snd' => 2, 'thd' => 3, 'fth' => 4];
$arr_res = [];

//method 1
foreach ($arr as $key => $value) {
    $arr_res[] = $key;
}

//method 2
$arr_res = array_keys($arr);

include_once '../classes/PrintResult.php';
new PrintResult($arr_res);
new PrintResult($arr_res);