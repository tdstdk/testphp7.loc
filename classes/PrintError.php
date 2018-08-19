<?php
/**
 * Created by PhpStorm.
 * Date: 07.08.18
 * Time: 21:15
 */

class PrintError
{
    function __construct($error)
    {
        $txt = '';
        foreach ($error as $value) {
            $txt .= $value.'<br>';
        }
        if ($txt != '') $txt = '<div style="color: red">'.$txt.'</div>';
        echo $txt;
    }
}