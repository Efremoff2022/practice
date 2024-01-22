<?php

// # Дана строка. Выведите в консоль длину этой строки.
// $str = "Automobile";
// $number = 30;
// echo 'Длина строки: '.strlen($str);

// echo "<br>";
// echo "<br>";

// # Посчитать сумму значений всех ключей в массиве ниже
// $arr = [
//     'prushkin' => 28200,
//     'Rich Official' => 15108,
//     'Puf_Paf_' => 10691,
//     'Рэйлган' => 9823,
//     'maza' => 8741,
//     'frostorus' => 8480,
//     'NotUrBruddah' => 8000,
//     'Foreva' => 8000,
//     'ju5t_eugene' => 4329,
//     'Bob' => 3514,
//     'Аноним Гороховый Супчик' => 3154,
//     'ya_na_masse' => 2999,
//     'aleksandrasd' => 2974,
//     'Бугагашечка' => 2600,
//     'Bilious' => 2320,
//     'AVG' => 2200,
//     'RandomToy' => 2100,
//     'pavel_11rf' => 2000,
//     'Димка из Дзержинска' => 1900,
//     'amiran696' => 1688,
//     'MediumSilent' => 1639,
//     'the_who51' => 1405,
//     'rea1spower' => 1110,
//     'PSY' => 1100,
//     'imAGRi' => 1000,
//     'stepanoff88' => 600,
//     'DolbitelZla' => 588,
//     'САБАДУН' => 555,
//     'Тим ака Мангуст' => 550,
//     'woliron' => 500,
//     'shevcovshiva' => 500
// ];
require_once($_SERVER['DOCUMENT_ROOT'] . "/basic/var_dumper.php");

$arr = file_get_contents("text.txt");
// dump($arr);
$arr = explode("\n", $arr);
// dump($arr);

$summ = 0;
foreach($arr as $key => $elem) {
    list($name, $price) = explode(" - ", $elem);
    $summ += $price;
    dump($name);
    dump($price);
    break;
}

echo "Сумма значений ключей: ".$summ;