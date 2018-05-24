<?php

//Создать многомерный массив без использования цикла

$array = [
    range(1, 3),
    range(4, 6),
    range(7, 9),
];
echo "Массив: <pre>" . print_r($array, 1) . "<pre>";