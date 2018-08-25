<?php
/**
 * Created by PhpStorm.
 * Date: 23.08.18
 * Time: 16:55
 */

class AccessorMode
{
    private $arr = [];

    public function __get($name)
    {
        if (array_key_exists($name, $this->arr)) {
            return $this->arr[$name];
        } else return null;
    }

    public function __set($name, $value)
    {
        $this->arr[$name] = $value;
    }

    public function __sleep()
    {
        return array('arr');
    }

    public function __wakeup()
    {
        echo 'wwwake!';
    }
}