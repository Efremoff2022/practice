<?php

# Дано число. Проверьте, отрицательное оно или нет. Выведите об этом информацию в консоль.
$number = 10;
if ($number > 0) {
    echo "Число $number является положительным";
}
else echo "Число $number является отрицательным";

# Создать 2 массива. Вывести рандомное значение первого массива с ключом "Молоко" используя и второй массив.
$food = [
    'Молоко' => [
        "Кефир",
        "Молочко",
        "Ряженка",
        "Сметана",
    ],

    'Мясо' => [
        "Говядина",
        "Курица",
        "Индекйка",
    ],

    'Напитки' => [
        "Сок",
        "Вода",
        "Лимонад",
    ]
];
echo "<br>";
echo "<br>";

$foodId = [3, 1, 0, 2];
echo "Вывод значения в массиве: ";
echo $food['Молоко'][$foodId[0]]; // вывод
?>