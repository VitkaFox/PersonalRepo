alert("Проверим истинность высказывания: Среди трех данных целых чисел есть хоть бы одна пара совпадающих");
var a = parseInt(prompt("Введите первое число a: "));
var b = parseInt(prompt("Введите второе число b: "));
var c = parseInt(prompt("Введите третье число c: "));
if (isNaN(a) || isNaN(b) || isNaN(c)) {
    alert("Ошибка! Нужно вводить только числа!");

} else  if (((a == b) || (a == c)) || ((b == a) || (b == c)) || ((c == a) || (c == b))) {
    alert("True");
} else {
    alert("False");
}