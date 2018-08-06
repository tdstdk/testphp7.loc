

<?php
/**
 * Created by PhpStorm.
 * Date: 05.08.18
 * Time: 22:18
 */

$db_file = @file_get_contents('db.txt');
if (isset($db_file) === false) $db_dates = [];
else {
    $db_dates = json_decode($db_file, true);
    if ($db_dates == null) $db_dates = [];
}

$ip = $_SERVER['REMOTE_ADDR'];

if (array_key_exists($ip, $db_dates)) $db_dates[$ip]++;
else $db_dates[$ip] = 1;

$db_file = json_encode($db_dates);
file_put_contents('db.txt', $db_file);

echo 'You visit this page '.$db_dates[$ip].' time(s).';

