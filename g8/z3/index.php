<?php
/**
 * Created by PhpStorm.
 * Date: 25.07.18
 * Time: 21:03
 */


function my_save($name, $val) {
    $val = print_r($val, true);
    if (file_put_contents($name, $val) === false) return 'error';
    else return "successfully ".$name;
}

echo my_save('extensions.txt', get_loaded_extensions());
echo my_save('constants.txt', get_defined_constants());
