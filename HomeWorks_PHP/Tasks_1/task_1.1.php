<?php
/*создать переменную login, присвоить ей стркоовое значение. Вывести на экран фразу:
"Вы вошли под именем (знчение переменной login)".
Удалить переменную login
*/

$login = "Виктория";
echo "Вы вошли под именем " . $login;
echo "<br>";
unset($login);
if (isset($login)) {
    echo "Существует";
} else {
    echo "Нет";
}