<?php

//Создать массив и удалить из его элементов теги

$array = [
    '<p>Some</p>',
    '<p>info</p>',
];
echo "Массив первоначальный: <pre>" . print_r($array, 1) . "<pre>";
echo "<br>";
$array2 = $array;
foreach ($array2 as $key => $value) {
    $value = strip_tags($value);
    $array2[$key] = $value;
}
unset($value);
echo "Массив измененный: <pre>" . print_r($array2, 1) . "<pre>";