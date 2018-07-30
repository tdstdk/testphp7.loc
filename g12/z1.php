<?php
/**
 * Created by PhpStorm.
 * Date: 29.07.18
 * Time: 13:42
 */


$str = <<<'PHP'
<?php
$string = 'November is a month.';
echo $string;
PHP;

echo highlight_string($str, true);
echo '<h3>This code:</h3>';
echo highlight_file('z1.php',true);