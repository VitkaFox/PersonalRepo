<?php

//Создать массив. Объединить все элементы массива в строку и вывести на экран

$array = range(1, 15);
echo "Массив: <pre>" . print_r($array, 1) . "<pre>";
$str = implode(", ", $array);
echo $str;