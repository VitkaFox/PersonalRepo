<?php

//Создать массив из предыдущих массивов

$array = range('a', 'j');
print_r($array);
$array2 = range(1, 10);
print_r($array2);
echo "<br>";
$uniArray = array_combine($array, $array2);
print_r($uniArray);