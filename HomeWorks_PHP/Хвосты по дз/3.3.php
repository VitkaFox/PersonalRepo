<?php
//Написать функцию - конвертер строки. Возможности:
//- перевод всех символов в верхний регистр;
//- перевод всех символов в нижний регистр;
//- перевод всех символов в нижний регистр и первых символов слов в верхний регистр.
//Это должна быть одна функция.

function func($str, $arg) {
    if ($arg == "big") {
        return strtoupper($str);
    } if ($arg == "small") {
        return strtolower($str);
    } if ($arg == "bigsmall") {
        return ucwords(strtolower($str));
    }
}
var_dump(func("the task to close all the tails of learning php", "bigsmall"));