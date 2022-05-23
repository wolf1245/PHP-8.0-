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