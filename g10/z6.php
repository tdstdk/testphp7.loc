<?php
/**
 * Created by PhpStorm.
 * Date: 28.07.18
 * Time: 16:10
 */

$arr_months = file('months.txt', FILE_IGNORE_NEW_LINES);

include_once '../classes/PrintResult.php';
new PrintResult($arr_months);