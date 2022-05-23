<?php
declare(strict_types=1);
/**
 * Задание 1
*Создайте функцию возведения числа в степень.
*Число и степень передаются аргументом.
 */
function degree($number, $degree) 
{
	return $number ** $degree;
}
echo degree(2, 2);
echo "<br>";
/**
 * Задание 2
*Создайте функцию rgb(), которая будет принимать три числовых аргумента и возвращать строку
*вида “rgb(23,100,134)”.
*Если аргументы не заданы, считать их равными нулю.
 */
$rgb = function (int $red = 0, int $green = 0, int $blue = 0) : string
{
	return "rgb($red, $green, $blue)";
};
echo $rgb();
echo "<br>";
/**
 * Задание 3
*Создайте функцию avg().
*Функция принимает массив чисел.
*Нужно возвращать среднее значение всех чисел массива.
 */
function avg(array $array = []) : float
{
	$sum = 0;
	foreach ($array as &$value) {
		$sum += $value;
	}
	return ($sum / count($array));
}
echo avg([1, 2]);
echo "<br>";
/**
 * Задание 4.
*Напишите функцию, которая отнимает от первого числа второе и делит на третье.
 */
function minusВivision(float $one, float $two, float $three) : float
{
	return (($one -$two) / $three);
}
echo minusВivision(3, 1, 1);
echo "<br>";
/**
 * Задание 5.
*Создайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели
*на русском языке.
 */
function dayOfTheWeek(int $numberDay) : string
{
	$days = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
	$rezult = "";
  if($numberDay != 0 && $numberDay <= 7) {
    $rezult = $days[--$numberDay];
	}else{
    $rezult = "Нет такого дня по счету";
  }
	return $rezult;
}
echo dayOfTheWeek(0);
echo "<br>";
/**
 * Задание 6.
*Создайте функцию, которая принимает ассоциативный массив и возвращает новый массив,
*который будет содержать только ключи входящего массива.
 */
function keysArray(array $array) : array
{
	$arr = [];
	foreach ($array as $key=>&$value) {
		$arr[] = $key;
	}
	return $arr;
}
var_dump(keysArray([1, 2, 'tr' => 'ggg']));
echo "<br>";