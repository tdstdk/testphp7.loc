<?php
/**
 * Created by PhpStorm.
 * Date: 25.07.18
 * Time: 18:58
 */
$res = file_get_contents('hello.txt');

if ($res === false) echo 'error: no fined a file';
else echo $res;