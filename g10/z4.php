<?php
/**
 * Created by PhpStorm.
 * Date: 28.07.18
 * Time: 14:47
 */

$a = 5;
$b = 7;

echo 'a='.$a.' b='.$b.'<br>';

[$a, $b] = [$b, $a];

echo 'a='.$a.' b='.$b.'<br>';
