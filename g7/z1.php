<?php
/**
 * Created by PhpStorm.
 * Date: 24.07.18
 * Time: 16:02
 */

$num = 7;
$num_st = $num ** $num;
$num_my = 1;
for ($i = 0; $i < $num; $i++) {
    $num_my *= $num;
}

echo "num: $num, st: $num_st, my: $num_my";