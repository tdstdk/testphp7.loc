<?php
/**
 * Created by PhpStorm.
 * Date: 30.07.18
 * Time: 19:25
 */

include_once 'ClassPoint.php';
$point = new ClassPoint();

$point->x = 1;
$point->y = 1;

$ser = serialize($point);

$res = file_put_contents('object.txt', $ser);

if ($res === false) echo 'error write';
else echo "File created successfully! Size: ".$res." bites<br><a href='z2_2.php'>see result</a>";