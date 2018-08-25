<?php
/**
 * Created by PhpStorm.
 * Date: 23.08.18
 * Time: 17:14
 */
if (isset($_GET['dat'])) {
    include_once 'AccessorMode.php';
//$class = new AccessorMode();
//$class->test = 'testim';
//$class->proba = 5367;
    $unser_dat = unserialize($_GET['dat']);

    //echo '<a href="z2_2.php?dat=' . urlencode($ser_dat) . '">test</a>';

    var_dump($unser_dat);
    //var_dump($class);
} else echo 'no dates';