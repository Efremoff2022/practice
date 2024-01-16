<?php
/*
Дебаг - вывод значения в браузер.
Dump — выдача информации о состоянии системы или её части. 
require_once($_SERVER['DOCUMENT_ROOT']."/var_dumper.php");
*/
function dump($data) {
    echo "<pre style=\"margin: 10px 0; padding: 10px; background: #ececec; white-space: pre-wrap;\">";
    print_r($data);
    echo "</pre>";
}

// dump and die - вывести и остановить
function dd($data) {
    die(dump($data));
}
?>