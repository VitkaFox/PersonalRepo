<?php

//Используя функцию удаления ьтегов из строки, вывести на экран строку "<h1>Hello, world!</h1>".
//Строка не должна выглядеть как заголовок первого уровня - все теги должны быть удалены.

$str = "<h1>Hello, world!</h1>";
echo $str;
echo "<br>";
$str = strip_tags($str);
echo $str;
