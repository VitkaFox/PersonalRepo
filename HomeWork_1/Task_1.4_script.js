var x = parseInt(prompt("Введите целое число в диапазоне от 1 до 5:"));
if (isNaN(x)) {
    alert("Ошибка! Нужно вводить только число!");
} else  if ((x > 5) || (x < 1)) {
    alert("Введенное число выходит за границы требуемого диапазона!");
} else if (x == 1) {
    alert("Оценка плохо");
} else if (x == 2) {
    alert("Оценка неудовлетворительно");
} else if (x == 3) {
    alert("Оценка удовлетворительно");
} else if (x == 4) {
    alert("Оценка хорошо");
} else if (x == 5) {
    alert("Оценка отлично");
} 