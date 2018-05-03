<?php
/*Рассчитать скорость движения машины и вывести ее в удобочитаемом виде.
Вывод в км/ч, м/с.
Исходные данные - пройденный путь S; время движения t. */

$s_km = 60;
$t_hour = 1;
$v = $s_km/$t_hour;
echo "Скорость автомобиля в км/ч - " . $v . " км/ч";
echo "<br>";
echo "Скорость автомобиля в м/с - " . round($v*1000/3600, 2, PHP_ROUND_HALF_UP) . " м/с";