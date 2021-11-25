<?php
function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case 'sum':
            return $arg1 + $arg2;
        case 'difference':
            return $arg1 - $arg2;
        case 'multiplication':
            return $arg1 * $arg2;
        case 'division':
            if($arg2 == 0){
                return "Делить на ноль нельзя!"; 
            } else{
                return $arg1 / $arg2;
            };
    }
};

$result = mathOperation((int)$_GET['number1'], (int)$_GET['number2'], $_GET['operation']);
?>




<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calc</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    
    <form method="get" id="calc">
        <h1>Калькулятор</h1>
        <div class="input-data">
            <input placeholder="Введите первое число" class="number-data" type="text" name="number1">
            <input placeholder="Введите второе число" class="number-data" type="text" name="number2">
        </div>
        <div class="buttons">
            <button class="operation-button" name="operation" value="sum" form="calc">+</button>
            <button class="operation-button" name="operation" value="difference" form="calc">-</button>
            <button class="operation-button" name="operation" value="multiplication" form="calc">*</button>
            <button class="operation-button" name="operation" value="division" form="calc">/</button>
        </div>
        <div class="result">Результат вычисления - <span><?php echo $result; ?></span></div>
    </form>
</body>
</html>

