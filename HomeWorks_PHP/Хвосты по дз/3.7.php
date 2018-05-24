<?php

//Дана строка '/php/'. Сделать из нее строку 'php', удалив концевые слеши.
$str = '/php/';
$trimmed = trim($str, "/");
var_dump($trimmed);