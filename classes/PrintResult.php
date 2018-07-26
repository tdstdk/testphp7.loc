<?php
/**
 * Created by PhpStorm.
 * Date: 26.07.18
 * Time: 17:04
 */

class PrintResult
{

    /**
     * PrintResult constructor.
     * @param $val
     */
    public function __construct($val)
    {
        echo '<pre>';
        print_r($val);
        echo '</pre>';
        return;
    }
}