<?php
$txt = 'Hello world!';
$res = file_put_contents('hello.txt', $txt);

if ($res === false) echo 'error write';
else echo "File created successfully! Size: ".$res." bites<br><a href='read_text.php'>see result</a>";