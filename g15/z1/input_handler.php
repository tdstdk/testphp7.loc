<?php
/**
 * Created by PhpStorm.
 * Date: 07.08.18
 * Time: 16:54
 */

function checkLenStringValue($value) {
    $value = (strlen($value) < 2 || strlen($value) > 20) ? '': $value;
    return strip_tags($value);
}

$post_val = filter_input_array(
    INPUT_POST,
    [
        'first' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'last' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
    ]
);
$error = [];
if (checkLenStringValue($_POST['first']) == '') $error[] = 'Имя должно быть от 2 до 20 символов';
if (checkLenStringValue($_POST['last']) == '') $error[] = 'Фамилия должна быть от 2 до 20 символов';

$result_val = filter_input_array(
    INPUT_POST,
    [
        'first' => ['filter' =>FILTER_CALLBACK,
                    'options' => 'checkLenStringValue'],
        'last' => ['filter' =>FILTER_CALLBACK,
                    'options' => 'checkLenStringValue'],
    ]
);

$email = filter_input(
    INPUT_POST,
    'email',
    FILTER_SANITIZE_EMAIL
);

$result_email = filter_input(
    INPUT_POST,
    'email',
    FILTER_CALLBACK,
    [
        'options' => function($email) {
            return strip_tags($email);
        }
    ]
);