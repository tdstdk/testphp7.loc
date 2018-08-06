<?php
/**
 * Created by PhpStorm.
 * Date: 05.08.18
 * Time: 14:39
 */

if (isset($_ENV['MODEWORK'])) {
    define('MODEWORK', $_ENV['MODEWORK']);
} else define('MODEWORK', '');

if (MODEWORK == 'test') $mode = 'Testing mode';
elseif (MODEWORK == 'production') $mode = 'Production mode';
else $mode = 'Development mode';

echo $mode;