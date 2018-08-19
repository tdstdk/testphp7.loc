<?php
/**
 * Created by PhpStorm.
 * Date: 07.08.18
 * Time: 16:42
 */
include_once 'input_handler.php';
include_once '../../classes/PrintError.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<? new PrintError($error); ?>
<form method="post">
    <label>
        Имя <input type="text" name="first" value="<?= $post_val['first']?>"><br>
        Фамилия <input type="text" name="last" value="<?= $post_val['last']?>"><br>
        Email <input type="email" name="email" value="<?= $email?>"><br>
        <input type="submit" value="Register">
    </label>
</form>
<?= $result_val['first'].' '.$result_val['last'].' '.$result_email?>
</body>
</html>
