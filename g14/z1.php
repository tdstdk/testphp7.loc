<?php
/**
 * Created by PhpStorm.
 * Date: 04.08.18
 * Time: 18:56
 */
if (isset($_POST['name'])) {
    setcookie('name', $_POST['name']);
    $_COOKIE['name'] = $_POST['name'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cookies and time</title>
</head>
<body>

<?php
if (isset($_COOKIE['name'])) {
    $hour = date('G');

    if ($hour >= 5 && $hour <= 11) $phrase = 'Good morning';
    if ($hour >= 11 && $hour <= 16) $phrase = 'Good day';
    if ($hour >= 16 && $hour <= 24) $phrase = 'Good evening';
    if ($hour >= 0 && $hour <= 5) $phrase = 'Good night';

    echo $phrase.', '.$_COOKIE['name'].'!';
}
else {
    echo '
<form action="" method="post">
    <label for="name">Enter your name</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="Send">
</form>
';
}
?>
</body>
</html>
