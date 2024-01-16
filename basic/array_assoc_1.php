<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/var_dumper.php");

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

// Вывод одного определенного значения
echo $food['Мясо'][1];

// Обход многомерного массива (с применением вложенного foreach)
foreach ($food as $key => $value) {
    echo "<ul>";
    echo "<b>".$key."</b>"."<br><br>";
    foreach($value as $eat) {
        echo "<li>".$eat."</li>";
    }
    echo "</ul>";
}
?>