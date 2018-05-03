<?php
/*Отсортировать массив по price */

$arr = [
    "1" => [
        "price" => 10,
        "count" => 2
    ],
    "2" => [
        "price" => 5,
        "count" => 5
    ],
    "3" => [
        "price" => 8,
        "count" => 5
    ],
    "4" => [
        "price" => 12,
        "count" => 4
    ],
    "5" => [
        "price" => 8,
        "count" => 4
    ]
];
function price_sort($x, $y) {
    if ($x["price"] < $y["price"]) {
        return true;
    } else if ($x["price"] > $y["price"]) {
        return false;
    } else {
        return 0;
    }
}
uasort($arr, "price_sort");
echo "<h2>Массив в начальном виде</h2><pre>" . print_r($arr, 1) . "</pre>";
echo "<h2>Массив отсортирован по price</h2><pre>" . print_r($arr, 1) . "</pre>";
