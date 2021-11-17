<?php
/*Задание 1
Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом*/

$a = 3;
$b = 2;

if ($a >= 0 && $b >= 0){
    echo $a - $b . PHP_EOL;
} 
else if ($a < 0 && $b < 0){
    echo $a * $b . PHP_EOL;
}
else {
    echo $a + $b . PHP_EOL;
};


/* Задание 2
Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.*/

$a = 5;

switch($a){
    case 0:
        echo 0 . PHP_EOL;
    case 1:
        echo 1 . PHP_EOL; 
    case 2:
        echo 2 . PHP_EOL;
    case 3:
        echo 3 . PHP_EOL; 
    case 4:
        echo 4 . PHP_EOL;
    case 5:
        echo 5 . PHP_EOL;  
    case 6:
        echo 6 . PHP_EOL;
    case 7:
        echo 7 . PHP_EOL;  
    case 8:
        echo 8 . PHP_EOL;
    case 9:
        echo 9 . PHP_EOL;
    case 10:
        echo 10 . PHP_EOL;
    case 11:
        echo 11 . PHP_EOL;
    case 12:
        echo 12 . PHP_EOL;
    case 13:
        echo 13 . PHP_EOL;
    case 14:
        echo 14 . PHP_EOL;;
    case 15:
        echo 15 . PHP_EOL;
};


/*Задание 3
Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/

function sum($arg1, $arg2){
    return $arg1 + $arg2;
};

function dif($arg1, $arg2){
    return $arg1 - $arg2;
};

function mult($arg1, $arg2){
    return $arg1 * $arg2;
};

function div($arg1, $arg2){
    return $arg1 / $arg2;
};


/*Задание 4
Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/

function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case 'Сумма':
            echo 'Сумма чисел - ' . sum($arg1, $arg2) . PHP_EOL;
            break;
        case 'Разность':
            echo 'Разность чисел - ' . dif($arg1, $arg2) . PHP_EOL;
            break;
        case 'Произведение':
            echo 'Произведение чисел - ' . mult($arg1, $arg2) . PHP_EOL;
            break;
        case 'Деление':
            echo 'Деление чисел - ' . div($arg1, $arg2) . PHP_EOL;
            break;
    }
};

mathOperation(10, 2, 'Сумма');
mathOperation(10, 2, 'Разность');
mathOperation(10, 2, 'Произведение');
mathOperation(10, 2, 'Деление');


/*Задание 5
Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций <PHP class="*/

//Задание делали к прошлому уроку


/*Задание 6
*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.*/

function power($val, $pow){
    if($pow == 0){
        return 1;
    } else if ($pow == 1){
        return $val;
    } else if ($pow > 1){
        return $val * power($val, $pow-1 );
    } else {
        return (1 / $val) * power ($val, $pow+1);
    };
};

echo power(2, 0) . PHP_EOL;
echo power(2, 1) . PHP_EOL;
echo power(2, 5) . PHP_EOL;
echo power(2, -5) . PHP_EOL;


/*Задание 7
*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты*/

$time = ' ';

function getHours($hours){
    $pronunciationHour = ['01', '21']; //час
    $pronunciationHours =  ['02', '03', '04', '22', '23', '24']; //часа

    if (in_array($hours, $pronunciationHour)){
        $time = $hours . ' час'; 
    } 
    else if (in_array($hours, $pronunciationHours)){
        $time = $hours . ' часа'; 
    }    
    else {
        $time = $hours . ' часов';
    };

    return $time;
};

function getMinutes($minutes){
    $pronunciationMinute = ['01', '21', '31','41','51']; //минута
    $pronunciationMinutes=  ['02', '22','23','24','32','33','34','42','43','44','52','53','54']; //минуты
    
    if (in_array($minutes, $pronunciationMinute)){
        $time = $minutes . ' минута'; 
    } 
    else if (in_array($minutes, $pronunciationMinutes)){
        $time = $minutes . ' минуты'; 
    }    
    else {
        $time = $minutes . ' минут';
    };

    return $time . PHP_EOL;
};

function getTime($hours, $minutes){
    return getHours($hours) . ' ' . getMinutes($minutes);
};

echo getTime(date('H'), date('i'));