<?php
/**
 * Created by PhpStorm.
 * Date: 20.08.18
 * Time: 16:27
 */

class Session
{
    /**
     * @param $key
     * @param $val
     */
    public function __set($key, $val) {
        setcookie($key, $val);
    }

    /**
     * @param $name
     * @return string
     */
    public function __get($name)
    {
        if ($this->existKey($name)) return $_COOKIE[$name];
        else return 'no this key';
    }

    /**
     * @param $key
     * @return bool
     */
    public function existKey($key) {
        return array_key_exists($key, $_COOKIE);
    }

    /**
     * @return mixed
     */
    public static function listKeys() {
        return $_COOKIE;
    }
}