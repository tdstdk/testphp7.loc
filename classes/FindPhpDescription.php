<?php
/**
 * Created by PhpStorm.
 * Date: 19.08.18
 * Time: 18:49
 */

class FindPhpDescription
{
    public static function find($func = '') {
        if ($func != '') {
            $func = str_replace('_', '-', $func);
            $content = file_get_contents('http://php.net/manual/ru/function.'.$func.'.php');
            $pos = strpos($content,'<span class="dc-title">');
            $content = substr($content,$pos);
            $pos = strpos($content, '</span>');
            $content = substr($content,0,$pos);
            $content = str_replace('<span class="dc-title">','', $content);
            return $content;
        } else {
            return 'no name for search function';
        }
    }
}