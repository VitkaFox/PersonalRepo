var x = parseInt(prompt("Введите целое число в диапазоне от -999 до 999:"));
if (isNaN(x)) {
    alert("Ошибка! Нужно вводить только число!");
} else  if ((x > 999) || (x < -999)) {
    alert("Введенное число выходит за границы требуемого диапазона!");
} else if (x <= -100) {
    alert("Число " + x + " трехзначное отрицательное");
} else if ((x >= -99) && (x <= -10)) {
    alert("Число " + x + " двузначное отрицательное");
} else if ((x >= -9) && (x <= -1)) {
    alert("Число " + x + " однозначное отрицательное");
} else if (x == 0) {
    alert("Число " + x + " однозначное и равно нулю");
} else if ((x >= 1) && (x <= 9)) {
    alert("Число " + x + " однозначное положительное");
} else if ((x >= 10) && (x <= 99)) {
    alert("Число " + x + " двузначное положительное");
} else if (x >= 100) {
    alert("Число " + x + " трехзначное положительное");
}