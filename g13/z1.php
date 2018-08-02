<?php
/**
 * Created by PhpStorm.
 * Date: 01.08.18
 * Time: 18:04
 */
if (isset($_POST['point'])) {
    include_once '../classes/Decart.php';

    $points = $_POST['point'];
    $decart = new Decart();
    $decart->x[] = $points['x'][0];
    $decart->y[] = $points['y'][0];
    $decart->x[] = $points['x'][1];
    $decart->y[] = $points['y'][1];

    echo '<div>'.$decart->x[0] .'x'. $decart->y[0] .','. $decart->x[1] .'x'. $decart->y[1] .' = '. $decart->length().'</div>';

}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=100%, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
<form method="post">
    <label>
    x1 = <input type="text" name="point[x][]">:
    y1 = <input type="text"  name="point[y][]">
    <br>
    x2 = <input type="text" name="point[x][]">:
    y2 = <input type="text"  name="point[y][]">
    <br>
    </label>
    <input type="submit" value="Send">
</form>
</body>
</html>
