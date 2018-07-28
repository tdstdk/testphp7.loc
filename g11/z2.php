<?php
/**
 * Created by PhpStorm.
 * Date: 28.07.18
 * Time: 21:20
 */

/**
 * @param int $val
 * @return bool
 */
function odd(int $val) : bool {
    if (($val & 1)) return true;
    else return false;
}

function showRezult($val) {
    if (odd($val)) echo  $val.' is odd';
    else echo $val.' is eval';
}

echo showRezult(3).'<br>';
echo showRezult(8).'<br>';
echo showRezult(0).'<br>';
