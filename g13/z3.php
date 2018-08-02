<?php
/**
 * Created by PhpStorm.
 * Date: 02.08.18
 * Time: 20:58
 */


$arr_punctes = file_get_contents('punctes.txt');

if ($arr_punctes !== false) $arr_punctes = json_decode($arr_punctes);
else $arr_punctes = [];

if (isset($_POST['punct'])) {
    $arr_del = $_POST['punct'];
    foreach ($arr_del as $key => $value) {
        if (array_key_exists($key, $arr_punctes)) array_splice($arr_punctes, $key, 1);
    }
    $txt_save = json_encode($arr_punctes);
    file_put_contents('punctes.txt', $txt_save);
}
$punctes = '';
if ($arr_punctes) {
    foreach ($arr_punctes as $key => $value) {
        $punctes .= '<input type="checkbox" name="punct['.$key.']">'.$value.'<br>';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label for="punctes">Check to delete</label><br>
    <? echo $punctes ?>
    <input type="submit" value="Delete">
</form>

</body>
</html>
