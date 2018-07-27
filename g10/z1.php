<?php
/**
 * Created by PhpStorm.
 * Date: 27.07.18
 * Time: 20:02
 */

$arr = ['fst', 'snd', 'thd', 'fth'];

//method 1
$val = $arr[mt_rand(0, count($arr) -1)];
echo $val;

echo '<br>';

//method 2
$val = $arr[array_rand($arr)];
echo $val;