<?php
/**
 * Задание 1
*Дан массив с элементами 'Привет, ', 'мир' и '!'. Необходимо вывести на экран фразу 'Привет,
*мир!'.
 */
$array = ['Привет', 'мир', '!'];
echo $array[0] . ' ' . $array[1] . $array[2];
echo "<br>";
/**
 * Задание 2
 * Создайте массив заработных плат $salary.
*Выведите на экран зарплату Пети и Коли.
 */
echo "<br>";
$salaryAll = [
	'Петя' => 5005,
	'Коля' => 15022,
];
echo 'Зарплаты: ' . "Петя = " . $salaryAll['Петя'] . ",Коля = " . $salatyAll['Коля'];
echo "<br>";