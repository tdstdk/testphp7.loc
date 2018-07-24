<?php
/**
 * Created by PhpStorm.
 * Date: 24.07.18
 * Time: 16:45
 */

function my_odd($num = 0)
{
    $num_m = $num & 1;
    if ($num === 0) $res = 'zero';
    else {
        if ($num_m) {
            $res = 'even';
        } else {
            $res = 'odd';
        }
    }

    return "number $num is $res";
}

echo my_odd(7).'<br>';
echo my_odd(26).'<br>';
echo my_odd(-1).'<br>';
echo my_odd(0).'<br>';
