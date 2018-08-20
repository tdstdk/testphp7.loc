<?php
/**
 * Created by PhpStorm.
 * Date: 20.08.18
 * Time: 16:40
 */

include_once '../classes/Session.php';
include_once '../classes/PrintResult.php';

$class = new Session();
$class->test = 'testim';

$info = new PrintResult($class::listKeys());