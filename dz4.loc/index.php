<?php
echo 'Из двух случайных чисел, одно из которых четное, а другое нечетное, определить и вывести на
экран нечетное число.';
$even = rand(2, 100) % 2 == 0 ? rand(2, 100) : null;
$odd = rand(2, 100) % 2 != 0 ? rand(2, 100) : null;
echo "<br>";
if($even % 2 != 0) {
	echo "$even";
} elseif ($odd % 2 != 0) {
		echo "$odd";
} else {
	echo "Произошла ошибка";
}
echo "<br>";
echo 'Дано два целых числа.
Проверить делится ли первое на второе.
Вывести на экран сообщение об этом, а также остаток (если он есть).';
$number1 = rand(0,100);
$number2 = rand(0,100);
echo "<br>";
echo 'Результат:';
if ($number1 > 0 && $number2 > 0) {
	if($number1 > $number2) {
		echo "Делиться: $number1" . '/' . "$number2 = " . round(($number1 / $number2), 0) . ' остаток от деления ' . ($number1 % $number2 != 0 ?  $number1 % $number2 : "нет");
	} else {
		echo "Делиться: $number1" . '/' . "$number2 = " . ($number1 / $number2);
	}
} else {
	echo "Ноль делить , как и на ноль = нельзя" . '$number1= ' . $number1. '  , $number2= ' .$number2;
}
echo "<br>";