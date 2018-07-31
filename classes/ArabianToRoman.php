<?php
/**
 * Created by PhpStorm.
 * Date: 31.07.18
 * Time: 15:41
 */

class ArabianToRoman
{
    private $arr_numbers = [
        [
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',],
        [
        1 => 'X',
        2 => 'XX',
        3 => 'XXX',
        4 => 'XL',
        5 => 'L',
        6 => 'LX',
        7 => 'LXX',
        8 => 'LXXX',
        9 => 'XC',],
        [
        1 => 'C',
        2 => 'CC',
        3 => 'CCC',
        4 => 'CD',
        5 => 'D',
        6 => 'DC',
        7 => 'DCC',
        8 => 'DCCC',
        9 => 'CM',]
    ];
    private $max_num = 999;
    private function numlitero(int $num, int $pos) {
        if (array_key_exists($num, $this->arr_numbers[$pos])) return $this->arr_numbers[$pos][$num];
        else return '';
    }
    function inRoman(int $number) {
        $response = '';
        if ($number > $this->max_num) $response = 'Error: number is too big.';
        elseif ($number < 1) $response = 'Error: number is not positive.';
        else {
            $number = str_split(strrev(strval($number)));
            for ($i = 0; $i <= count($number)-1; $i++) {
                //var_dump($i);var_dump($number[$i]);
                //$num = ;
                $response = $this->numlitero($number[$i], $i).$response;
            }
        }
        return $response;
    }
}