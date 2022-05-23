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