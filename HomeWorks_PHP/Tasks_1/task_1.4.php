<?php
/*Создать константу и присвоить ей значение.
Вывести значение созданной константы.
Попытаться изменить ее значение. */

define("CONST_1", "Постоянство - залог успеха!");
echo CONST_1;
echo "<br>";
const CONST_1 = "Новое значение";
if (empty(CONST_1)) {
    echo CONST_1;
} else {
    echo "Ошибка в переопределении константы!";
}