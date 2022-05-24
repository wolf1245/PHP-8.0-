<?php
declare(strict_types=1);
/**
 * Задание 1
*Создайте функцию randomString(), которая будет генерировать случайную строку, а в качестве
*аргумента принимает длину генерируемой строки.
 */
function randomString(int $lengchString) : string
{
	$arrString = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, ' ', ':', '@', '!', '&', ',', '?', '-', '_', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
	$stringMy = '';
	for($i = 0; $i < $lengchString; $i++)
	{
		$stringMy .= $arrString[rand(0, count($arrString) - 1)];
	}
	return $stringMy;
}
echo randomString(5);
echo "<br>";
/**
 * Задание 2
*Создайте функцию rgb(), которая будет принимать три числовых аргумента и возвращать строку
*вида “rgb(23,100,134)”.
*Если аргументы не заданы, считать их равными нулю.
*При реализации иcпользовать встроенную функцию sprintf().
 */
function rgb(int $red = 0, int $green = 0, int $blue = 0) : string
{
	$strngMy = 'rgb';
	return $strngMy .= '(' .printf("%%u = '%u'\n", $red) . printf("%%u = '%u'\n", $green) . printf("%%u = '%u'\n", $blue) . ')';
}
echo rgb();
echo "<br>";
/**
 * Задание 3
*В переменной $date лежит дата в формате '31-12-2030'. Преобразуйте эту дату в формат
*'2030.12.31'.
 */
$date = '31-12-2030';
function getDateMy(string $date) : string
{
	return date("Y-m-d", strtotime($date));
}
echo getDateMy($date);
echo "<br>";
/**
 * Задание 4.
*Напишите функцию, которая разделяет массив на части заданного размера.
 */
function arrayApart(array $array, $countArr) : array
{
	$parts = intval(round((count($array) / $countArr), 0, PHP_ROUND_HALF_UP));
	$arr = array_chunk($array, $parts);
	return $arr;
}
var_dump(arrayApart([1, 2, 5, 6, 8], 10));
echo "<br>";
/**
 * Задание 5.
*Создайте функцию, которая будет вычислять количество слов в строке
 */
function shareString(string $text) : array
{
	$chars = preg_split('/[\s\,\.\:\;\-]+/', $text);
	return $chars;
}
var_dump(shareString("Hello, my friends"));
echo "<br>";
/**
 * Задание 6.
*Создайте функцию, которая принимает массив и возвращает новый, где все значения массива
*приведены в нижний регистр, а первая буква в верхний.
 */
function valueTolower(array $array) : array
{
	$arr = [];
	foreach ($array as $key => &$value) {
		$arr[$key] = ucfirst(mb_strtolower($value));
	}
	return $arr;
}
var_dump(valueTolower(['key' => 'hgHHHH', 1 => 'KKKJJcdnj',]));
echo "<br>";