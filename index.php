<!--Упражнение 1
Какой есть оператор чтобы можно было бы вводить числа при запросе у пользователя?-->
<!--<?php/*
	$a = -3;
	$b = 2;
	if ($a >= 0 && $b >= 0) {
		echo $a - $b;
	} elseif ($a < 0 && $b < 0) {
		echo $a * $b;
	} elseif ($a >= 0 || $b < 0){
		echo $a + $b;
	} else{
		echo $a + $b;
	}*/
?>-->

<!--Упражнение 2
Можно ли осуществить вывод чисел (0,15) через массив, чтобы не городить "2-х метровую скатерть"?-->
<!--<?php/*
$a = array(0,15);
	switch ($a) {
		case (0,15):
			echo 'число $a';
			break;
		
		default:
			echo 'число не из списка';
			break;
	}
$a = -1;
	switch ($a) {
		case 0:
			echo 'number 0';
			break;
		case 1:
			echo 'number 1';
			break;
		case 2:
			echo 'number 2';
			break;
		case 3:
			echo 'number 3';
			break;
		case 4:
			echo 'number 4';
			break;
		case 5:
			echo 'number 5';
			break;
		case 6:
			echo 'number 6';
			break;
		case 7:
			echo 'number 7';
			break;
		case 8:
			echo 'number 8';
			break;
		case 9:
			echo 'number 9';
			break;
		case 10:
			echo 'number 10';
			break;
		case 11:
			echo 'number 11';
			break;		
		case 12:
			echo 'number 12';
			break;
		case 13:
			echo 'number 13';
			break;
		case 14:
			echo 'number 14';
			break;
		case 15:
			echo 'number 15';
			break;								
		default:
			echo "number isn't on the list";
			break;
	}*/
?>-->

<!--Упражнение 3-->
<!--<?php/*
	$a = 2;
	$b = 3;
	function summary($a, $b){
		return $a + $b; 
	}
	$sum = summary($a, $b);
	function multiple($a, $b){
		return $a * $b; 
	}
	$mult = multiple($a, $b);
	function subtraction($a, $b){
		return $a - $b; 
	}
	$sub = subtraction($a, $b);
	function division($a, $b){
		return $a / $b; 
	}
	$div = division($a, $b);
	echo "$sum, $mult, $sub, $div";
*/
?>-->
<!--Упражнение 4-->
<?php
	$arg1 = 6;
	$arg2 = 3;
	$operation = "+";
	function mathOperation($arg1, $arg2, $operation){
		return $arg1 $operation $arg2;
	}
	$result = mathOperation($arg1, $arg2, $operation);
	echo "$result";
?>