<?php

//Преобразовать формат даты

$date = date_create('30-11-2017');
echo date_format($date, 'Y.m.d');