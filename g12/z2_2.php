<?php
/**
 * Created by PhpStorm.
 * Date: 30.07.18
 * Time: 21:40
 */


$res = file_get_contents('object.txt');

if ($res === false) echo 'error: no fined a file';
else {
    include_once 'ClassPoint.php';
    $dd = unserialize($res);
    $x = $dd->x;
    $y = $dd->y;
    echo 'x = ' . $x . 'y = '.$y;
}

