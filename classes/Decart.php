<?php
/**
 * Created by PhpStorm.
 * Date: 01.08.18
 * Time: 18:23
 */

class Decart
{
    public $x;
    public $y;

    public function length() {
        $len = sqrt( ($this->x[1] - $this->x[0]) ** 2 + ($this->y[1] - $this->y[0]) ** 2);
        return $len;
    }
}