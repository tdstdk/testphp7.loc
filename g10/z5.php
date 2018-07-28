<?php
/**
 * Created by PhpStorm.
 * Date: 28.07.18
 * Time: 14:53
 */

//method 1
$num_elmt = mt_rand(5, 10);

for ($i = 1; $i <= $num_elmt; $i++) {
    $arr[] = mt_rand(0, 100);
}

include_once '../classes/PrintResult.php';
new PrintResult($arr);

sort($arr);

new PrintResult($arr);
