<?php
	$h2 = 'Задание';
	$title = 'Homework';
	$year = date('Y');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
</head>
<body>
	<h2><?php echo $h2; ?> 1</h2>
	<h3>Установить программное обеспечение: веб-сервер, базу данных, интерпретатор, текстовый редактор. Проверить, что все работает правильно.</h3>
	<p><img src="img/Task1.png" width="279"><p>

	
	<h2><?php echo $h2; ?> 2</h2>
	<h3>Выполнить примеры из методички и разобраться, как это работает.</h3>
	<?php
		echo "Hello, World" . '<br>';

		$name = "Ivan";
		echo "Hello, $name" . '<br>';

		$d = 1;
		echo "$d" . '<br>';
		echo '$d' . '<br>';

		$a = 'Hello, ';
		$b = 'World';
		$c = $a . $b;
		echo "$c" . '<br>';
		
		$number1 = 10;
		$number2 = 2;

		echo $number1 + $number2 . '<br>';
		echo $number1 - $number2 . '<br>';
		echo $number1 * $number2 . '<br>';
		echo $number1 / $number2 . '<br>';
		echo $number1 % $number2 . '<br>';
		echo $number1 ** $number2 . '<br>';

		$number1 += $number2;
		echo "a = " . $number1 . '<br>';
		echo $number1++ . '<br>';
		echo ++$number1 . '<br>';
		echo $number1-- . '<br>';
		echo --$number1 . '<br>';

		var_dump($number1 == $number2);
		var_dump($number1 === $number2); 
		var_dump($number1 > $number2); 
		var_dump($number1 < $number2);  
		var_dump($number1 <> $number2); 
		var_dump($number1 != $number2);  
		var_dump($number1 !== $number2); 
		var_dump($number1 <= $number2);  
		var_dump($number1 >= $number2); 
	?>


	<h2><?php echo $h2; ?> 3</h2>
	<h3>Объяснить, как работает данный код:
		<span>
			$a = 5;
			$b = '05';
			var_dump($a == $b);         // Почему true?
			var_dump((int)'012345');     // Почему 12345?
			var_dump((float)123.0 === (int)123.0); // Почему false?
			var_dump((int)0 === (int)'hello, world'); // Почему true?
		</span>
	</h3>
	<?php
		$a = 5;
		$b = '05';
		var_dump($a == $b);         // При сравнении PHP приводит второе слагаемое к числу, а т.к. при == сравниваются только значения, поэтому true
		var_dump((int)'012345');     // В данном случае производится преобразование типа к числу, число не может начинаться с 0, поэтому 12345
		var_dump((float)123.0 === (int)123.0); // Сравнение по значению и типу. Значение совпадает, но тип различается
		var_dump((int)0 === (int)'hello, world'); // Второе слагаемое приводится к числу, а т.к. это строка, то PHP преобразует ее в 0. Поэтому в данном случае значение и тип совпадает
	?>


	<h2><?php echo $h2; ?> 4</h2>
	<h3>Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных.</h3>
	<span><?php echo $year; ?></span>


	<h2><?php echo $h2; ?> 5</h2>
	<h3> *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.</h3>
	<?php
		$a = 1;
		$b = 2;
		
		$b -= $a;
		$a += $b;

		echo "a = $a" . ', ' . "b = $b";
	?>
</body>
</html>

