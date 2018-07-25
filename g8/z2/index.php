<?php
/**
 * Created by PhpStorm.
 * Date: 25.07.18
 * Time: 20:39
 */

$name = date('Y-m-d-H-i-s').'.txt';
$val = mt_rand();
if (file_put_contents($name, $val) === false) echo 'error';
else echo "successfully ".$val;