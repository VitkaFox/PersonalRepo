var a = parseInt(prompt("Введите первое число a: "));
var b = parseInt(prompt("Введите второе число b: "));
var c = parseInt(prompt("Введите третье число c: "));
if (isNaN(a) || isNaN(b) || isNaN(c)) {
    alert("Ошибка! Нужно вводить только числа!");
} else  if ((a < b) && (a < c)) {
    alert("Минимальное число a: " + a);
} else if ((b < a) && (b < c)) {
    alert("Минимальное число b: " + b);
} else if ((c < a) && (c < b)) {
    alert("Минимальное число с: " + c);
} else {
    alert("Минимальных чисел несколько");
}
