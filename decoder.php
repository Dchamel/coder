<?php

//Функция разделения слов по символам
function chopchop_string($string) {

    preg_match_all("/(\S)/u", $string, $chop_string, PREG_PATTERN_ORDER);
    return $chop_string[0];

}

//Входящие данные
$coded_string=$_POST["txt4decode"];
$key="Попаболь";

//Обработка входящих данных
$coded_string_no_utf8=utf8_decode($coded_string);
$key_array_ready=chopchop_string($key);

//Расшифровка
preg_match_all("/(\d+)(\D+)/",$coded_string_no_utf8,$coded_array,PREG_PATTERN_ORDER);
$coded_array_merged=array_combine($coded_array[1],$coded_array[2]);
ksort($coded_array_merged);

foreach ($coded_array_merged as $letter_coded) {

    $letter_array_ready = chopchop_string($letter_coded);

    $key_array_ready_2change = $key_array_ready; //дубликат массива ключей

    foreach ($letter_array_ready as $letter) {

        $i = 0;
        $ii = -1;
        foreach ($key_array_ready_2change as $key_letter) {
            $ii++;
            if ($key_letter == $letter) {
                $letter = NULL;
                $key_array_ready_2change[$ii] = NULL;
            }
        }
        echo $letter;

    }
}