<?php
/**
 * Created by PhpStorm.
 * Date: 23.08.18
 * Time: 17:14
 */
include_once 'AccessorMode.php';
$class = new AccessorMode();
$class->test = 'testim';
$class->proba = 5367;
$ser_dat = serialize($class);
echo '<a href="z2_2.php?dat='.urlencode($ser_dat).'">test</a>';