<!doctype html>

<html lang="ru">
	<head>
 		<meta charset="UTF-8">
 		<meta name="viewport"
		 	content="width=device-width, user-scalable=no, initial-scale=1.0,
			maximum-scale=1.0, minimum-scale=1.0">
		 
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
     PHP
    </title>

	</head>

<body>

	<?php
		echo 'Задание 1 <br>';
		echo '<b>Hello</b> World!';
	 	echo "<br>Hello";
	 	echo '\'';
	 	echo '<hr>';
	?>
	<?php
		echo 'Задание 2 <br>';
 		define(MY_AGE, 24);
 		echo MY_AGE . '<br>';
		 $number = 5;
		 $num = -0.55;
		 $str = "Переменная";
		 $bool = false;
		 $a = 0.5;
		 $b = "0.5";
		 echo $a + floatval($b).'<br>';
		 echo $str . ': ' . $number . '. Var 2: ' . $num;
		 echo '<hr>';
	?>
	<?php
		echo 'Задание 3 <br>';
		$name = Павел;
		$surname = Иванов;
		$date = 1;
		$month = 11;
		$year = 1999;
		$age = 22;
		$happy = 0.76;
		echo "Имя: $name, фамилия: $surname" . '<br>';
		echo "Дата рождения: $date.$month.$year". '<br>';
		echo "Возраст: $age". '<br>';
		echo "Уровень счастья: $happy";
		echo '<hr>';
	?>
	<?php
		echo 'Задание 4'.'<br>';
		$hasCar = false;
		$number = -0.78902;
		echo "Есть машина? $hasCar". '<br>';
		echo "Число: $number";
		echo '<hr>';
	?>
	<?php
		echo 'Задание 5'.'<br>';
		define("NUMBER_E", 2.71828);
		echo NUMBER_E;
		echo '<hr>';
	?>
	<?php
		echo 'Задание 6'.'<br>';
		echo defined("NUMBER_E");
		echo '<hr>';
	?>
	<?php
		echo 'Задание 7'.'<br>';
		$x = 10;
 		$y = 20;
 		echo $x + $y.'<br>';
		echo $x - $y.'<br>';
		echo $x * $y.'<br>';
		echo $x / $y.'<br>';
		echo $x % $y.'<br>';
		$x += 10;
		$y -= 10;
		echo $x.'<br>';
		echo $y.'<br>';
		$x++;
		$x--;
		echo M_PI.'<br>';
		echo M_E.'<br>';
		echo abs(-22).'<br>';
		echo round(3.5556734, 2).'<br>';
		$rand = mt_rand(1, 20);
		$rand++;
		echo $rand.'<br>';
		echo max(2, 5, 6, 1, 8, 3, 6).'<br>';
		echo '<hr>';

	?>
	<?php
		echo 'Задание 8'.'<br>';
		$first = 5.6;
		$second = 8.9;
		$summ = $first + $second;
		$diff = $first - $second;
		$mult = $first * $second;
		$divide = $first / $second;
		$ostatok = $first % $second;
		echo "Сумма: $summ".'<br>';
		echo "Разница: $diff".'<br>';
		echo "Умножение: $mult".'<br>';
		echo "Деление: $divide".'<br>';
		echo "Остаток: $ostatok".'<br>';
		echo '<hr>';
	?>
	<?php
		echo 'Задание 9'.'<br>';
		$a = -2;
		$a *= 3;
		$a++;
		echo "Результат: $a";
		echo '<hr>';
	?>
	<?php
	 	echo 'Задание 10'.'<br>';
	 	echo "Максимум : " . max(9, 23, 0, -24.5, 34, 11, 41, 3, -3.2, 3);
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 11'.'<br>';
	 	echo floor(sqrt(2));
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 12'.'<br>';
		$str = "Hello";
		echo "VAR: $str" . '!'.'<br>';
		echo "<input type=\"text\"><br>";

		$length = strlen($str);
		echo strtoupper(trim(" some ").'<br>');
		echo $length.'<br>';
		echo md5("qwerty");
		

		echo '<hr>';
	?>
	<?php
	 	echo 'Задание 13'.'<br>';
	 	echo "\"".'<br>';
		echo " ' ".'<br>';
		echo "\\".'<br>'; 
		echo "\n".'<br>';
		echo "<div>Просто блок</div>".'<br>';
		echo "\"" . " ' " . "\\" . "\n" . "<div>Просто блок</div>";
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 14'.'<br>';
	 	$string = "ASDПросто текстASD";
		$newStr = substr($string, 0, strlen($string) - 3).'<br>';
		echo "Обрезанная строка - $newStr".'<br>';
		$lowerCase = substr($newStr, 0, 3);
		$result = strtolower($lowerCase);
		$result .= substr($newStr, 3, strlen($newStr));
		echo "Нижний регистр - $result".'<br>';
		echo "Первые три символа - " . substr($result, 0, 3).'<br>';
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 15'.'<br>';
	 	$a = 2;
		$b = 10;
		if ($a == $b) {
		echo "$a == $b";
		} else if ($a <= $b) {
		echo "$a <= $b";
		} else {
		echo "$a > $b";
}
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 16'.'<br>';
	 	$a = 5;
 		$str = "Hello";
		$isWeatherGood = false;
		if($str == "Hello" && !$isWeatherGood)
			echo 'First';
		else if($a == 5) {
			$res = "Second";
			echo $res;
		if($str == "Hello") {
			echo "<br>Yes";
			}
		}
		else if($a > 50)
			echo '$a > 50';
		else if($a <= 45)
			echo '$a <= 45';
		else
			echo 'Else';
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 17'.'<br>';
	 	$a = 23;
		if ($a == 5)
			echo "10";
		else if ($a == 10)
			echo "15";
		else if ($a == 30)
			echo "20";
		else
			echo "Что-то не то!";
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 18'.'<br>';
	 	$x = 4.3;
		$y = 5.6;
		if ($x == 15)
			echo 'Число $x равно 15';
		else
			echo 'Число: $x не равно 15'.'<br>';
		if ($y >= 6)
			echo 'Число: $y больше или равно 6';
		else
			echo 'Число: $y не больше или не равно 6'.'<br>';
		if($x == $y)
			echo 'Числа $x и $y равны';
		else
			echo 'Числа $x и $y не равны';
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 19'.'<br>';
	 	$a = 34;
		if (($a < 50 && $a != 37 && $a >= 32) || ($a == 0 || $a == 15))
			echo 'Число $a меньше 50, при этом не равно 37 и не меньше 32'.'<br>';
		else
			echo 'Число $a либо больше 50, либо равно 37, либо меньше 32'.'<br>';
		if ($a == 0 || $a == 15)
			echo true;
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 20'.'<br>';
	 	$x = 7;
		$y = "7";
		if ($x == $y)
			echo 'значение равны'.'<br>';
		else
			echo 'значение не равны'.'<br>';
		if ($x === $y)
			echo 'типы данных равны'.'<br>';
		else
			echo 'типы данных не равны'.'<br>';
		echo '<hr>'

	?>
	<?php
	 	echo 'Задание 21'.'<br>';
	 	$a = 2;
		$b = 5;
		if ($a % 2 == 0)
			echo $b.' - нечетное число';
		else
			echo $a.' - нечетное число';
	 	echo '<hr>';
	?>
	<?php
	 	echo 'Задание 22'.'<br>';
	 	$a = 5;
		$b = -3;
		$res = $b != 0 ? ($a / $b) : 1;
		echo "Результат: $res";
	 	echo '<hr>';
	?>
</body>
</html>