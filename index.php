<!-- 

Нужно написать код, который будет принимать на вход число и 3 формы слова - 3 склонения в зависимости от числа, с которым они употребляются в речи. Например: яблоко (одно), яблока (три), яблок (пять). В зависимости от числа нужно выбрать правильную форму слова и вывести на экран фразу из числа и слова.

На вход подаётся 4 строки:

    число
    слово в единственном числе (одно яблоко)
    слово в множественном числе, когда речь идёт о двух объектах (два яблока)
    слово в множественном числе, когда речь идёт о пяти объектах (пять яблок)

Вывести нужно число и слово в правильном склонении, разделённые пробелами.
 -->

<?php

function declensionWord ($number, $singleDec, $multipDec, $multipDecTwo) {
	$arrNum = str_split($number, 1);
	$countArr = count($arrNum);
	$lastNum = $arrNum[$countArr-1];
	if ($number>=10 && $number <= 20) {
		return "$number $multipDecTwo";
	}
	if ($countArr > 1) {
		$lastTwoNumber = $arrNum[$countArr-2].$arrNum[$countArr-1];
		if ($lastTwoNumber>=10 && $lastTwoNumber <= 20) {
		return "$number $multipDecTwo";
	}
	} 
	switch ($lastNum) {
		case 1: 
		return "$number $singleDec";
		case 2:
		case 3:
		case 4:
		return "$number $multipDec";
		case 0:
		case 5:
		case 6:
		case 7:
		case 8:
		case 9:
		return "$number $multipDecTwo";
	}

}
echo declensionWord(41,'яблоко','яблока','яблок');

?>