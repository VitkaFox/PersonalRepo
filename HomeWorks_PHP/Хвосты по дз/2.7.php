<?php

//Создать массив, заполненный буквами от 'a' до 'j'. Сделать из него массив с заглавными буквами.
$array = range('a', 'j');
foreach ($array as $value) {
    echo $value . " ";
}
unset($value);
echo "<br>";
print_r($array);
echo "<br>";
var_dump(is_array($array));
echo "<br>";
foreach ($array as $i => $value) {
    $value = strtoupper($value);
    $array[$i] = $value;
    echo $value . " ";
}
unset($value);
echo "<br>";
print_r($array);


