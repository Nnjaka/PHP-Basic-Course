<?php
/*Задание 1
С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.*/
$n = 0;

while($n <= 100){
    if($n % 3 == 0){
        echo $n . PHP_EOL;
    };
    $n++;
};


/*Задание 2
С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.*/
$n = 0;

do{
    if($n === 0){
        echo $n . ' – ноль.' . PHP_EOL;
    }
    else if($n % 2 == 0){
        echo $n . ' – четное число.' . PHP_EOL;
    } 
    else{
        echo $n . ' – нечетное число.' . PHP_EOL;
    };
    $n++;
} while ($n <= 10);


/*Задание 3
Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)*/
$sities = [
    'Московская область' => ['Москва','Клин','Зеленоград','Подольск'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Скопин', 'Сасово']
];

foreach($sities as $index => $elements){
    echo $index . ': ' . PHP_EOL . join(', ', $elements) . PHP_EOL;
};


/*Задание 4
Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). 
Написать функцию транслитерации строк.*/
function transliteration($text){
    $alphabet = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v', 
        'г' => 'g', 
        'д' => 'd', 
        'е' => 'e', 
        'ё' => 'yo', 
        'ж' => 'zh', 
        'з' => 'z', 
        'и' => 'i', 
        'й' => 'yy', 
        'к' => 'k', 
        'л' => 'l', 
        'м' => 'm', 
        'н' => 'n', 
        'о' => 'o', 
        'п' => 'p', 
        'р' => 'r', 
        'с' => 's', 
        'т' => 't', 
        'у' => 'u', 
        'ф' => 'f', 
        'х' => 'kh', 
        'ц' => 'ts', 
        'ч' => 'ch', 
        'ш' => 'sh', 
        'щ' => 'shch', 
        'ъ' => '»', 
        'ы' => 'y', 
        'ь' => '‘', 
        'э' => 'e', 
        'ю' => 'yu', 
        'я' => 'ya'
    ];

    echo str_replace(array_keys($alphabet), array_values($alphabet), $text) . PHP_EOL;
};

transliteration('привет');


/*Задание 5
Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.*/
function replaceSpace($text){
    $space = [
        ' ' => '_'
    ];

    echo str_replace(array_keys($space), array_values($space), $text) . PHP_EOL;
};

replaceSpace('привет как дела');


/*Задание 6
В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.*/
$menu = [
    'Men\'s clothing' => [
        'shirts' => ['long sleeve', 'short sleeve'],
        'pants'=> ['jeans', 'pants'],
        'accessories' => ['hats', 'belts']
    ],
    'Woman\'s clothing' => [
        'dress' => ['mini', 'midi', 'maxi'],
        'blouses' => ['long sleeve', 'short sleeve'],
        'pants' => ['jeans', 'pants']]
];

echo '<ul>';
foreach($menu as $category => $subcategory){
    if(is_array($subcategory)){
        echo '<li>'. $category . '<ul>';
        foreach($subcategory as $keyCategory => $subsubcategory){
            if(is_array($subsubcategory)){
                echo '<li>'. $keyCategory . '<ul>';
                foreach($subsubcategory as $element){
                    echo '<li>' . $element . '</li>';
                };
                echo '</li></ul>';
            };
        };
        echo '</li></ul>';
    };
};
echo '</ul>';


/*Задание 7
7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
for (…){ // здесь пусто}*/
for($i=0;$i<10;print $i++);


/*Задание 8
*Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».*/
$sities = [
    'Московская область' => ['Москва','Клин','Зеленоград','Подольск'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Скопин', 'Сасово']
];

foreach($sities as $index => $elements){
    echo $index . ': '. PHP_EOL;
    foreach ($elements as $key => $value) {
        if(mb_substr($value, 0, 1) == 'К') {
            echo $value . PHP_EOL;
        };
    };
};


/*Задание 9
*Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).*/
function fullTransliteration($text){
    $alphabet = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v', 
        'г' => 'g', 
        'д' => 'd', 
        'е' => 'e', 
        'ё' => 'yo', 
        'ж' => 'zh', 
        'з' => 'z', 
        'и' => 'i', 
        'й' => 'yy', 
        'к' => 'k', 
        'л' => 'l', 
        'м' => 'm', 
        'н' => 'n', 
        'о' => 'o', 
        'п' => 'p', 
        'р' => 'r', 
        'с' => 's', 
        'т' => 't', 
        'у' => 'u', 
        'ф' => 'f', 
        'х' => 'kh', 
        'ц' => 'ts', 
        'ч' => 'ch', 
        'ш' => 'sh', 
        'щ' => 'shch', 
        'ъ' => '»', 
        'ы' => 'y', 
        'ь' => '‘', 
        'э' => 'e', 
        'ю' => 'yu', 
        'я' => 'ya',
        ' ' => '_'
    ];

    echo str_replace(array_keys($alphabet), array_values($alphabet), $text) . PHP_EOL;
};

fullTransliteration('это было не сложно');