<?php
/**
 * Created by PhpStorm.
 * Date: 31.07.18
 * Time: 19:34
 */

include_once '../classes/ArabianToRoman.php';

$class_roman = new ArabianToRoman();
echo '116 is '.$class_roman->inRoman(116).'<br>';
echo '199 is '.$class_roman->inRoman(199).'<br>';
echo '14 is '.$class_roman->inRoman(14).'<br>';
echo '5824 is '.$class_roman->inRoman(5824).'<br>';
