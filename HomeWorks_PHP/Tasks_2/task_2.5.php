<?php
/*Дан массив $fruits.
Каждому вложенному массиву добавить count - количество элементов в массиве (элементы с 
одинаковым name).
Удалить дублирующиеся элементы. */

$fruits = [
    [
        "name" => "apple",
        "color" => "red"
    ],
    [
        "name" => "orange",
        "color" => "orange"
    ],
    [
        "name" => "lemon",
        "color" => "yellow"
    ],
    [
        "name" => "apple",
        "color" => "green"
    ],
    [
        "name" => "plum",
        "color" => "violet"
    ],
    [
        "name" => "plum",
        "color" => "violet"
    ],
    [
        "name" => "apple",
        "color" => "red"
    ],
    [
        "name" => "lemon",
        "color" => "yellow"
    ],
    [
        "name" => "banana",
        "color" => "yellow"
    ]
];
$x = count($fruits);
for ($i = 0; $i < $x; $i++) {
    $fruits[$i]["count"] = 0;
    for ($j = 0; $j < $x; $j++) {
        if ($fruits[$i]["name"] == $fruits[$j]["name"]) {
            $fruits[$i]["count"] += 1;
        }
    }
}

echo "<h2>Массив начальный</h2><pre>" . print_r($fruits, 1) . "</pre>";

$unique_fruits = array_unique($fruits, SORT_REGULAR);
$y = count($unique_fruits);
for ($i = 0; $i < $y; $i++) {
    $unique_fruits[$i]["count"] = 0;
    for ($j = 0; $j < $y; $j++) {
        if ($unique_fruits[$i]["name"] == $unique_fruits[$j]["name"]) {
            $unique_fruits[$i]["count"] += 1;
        }
    }
}
echo "<h2>Массив конечный</h2><pre>" . print_r($unique_fruits, 1) . "</pre>";


