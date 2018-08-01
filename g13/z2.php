<?php
/**
 * Created by PhpStorm.
 * Date: 01.08.18
 * Time: 22:03
 */

if (isset($_POST['text'])) {
    $text = $_POST['text'];
    file_put_contents('content.txt', $text);
}
else {
    $text = @file_get_contents('content.txt');
    if ($text === false) $text = '';
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>file content</title>
</head>
<body>

<form method="post">
    <label>
        <textarea name="text"  cols="30" rows="10"><? echo $text; ?></textarea>
        <input type="submit" value="Send text">
    </label>
</form>

</body>
</html>
