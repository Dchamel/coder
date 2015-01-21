<?php
//Входящие данные
$coded_string="2ÑÐ»ÐÐ¾ÑÐ°Ð¾Ð¿Ð±6Ð¾Ð°ÐÐ¿Ð»ÑÐ±Ð¾Ñ9ÑÐ¾Ð»ÑÐ±ÐÐ¾Ð¿Ð°4Ð±Ð»Ð¾Ð¿Ð¾Ð±ÑÐÐ°8Ð¾Ð±ÑÐ¾Ð¿ÐÐ°ÑÐ»11ÑÐ±Ð°ÐÐ¿Ð°Ð¾Ð¾Ð»7#Ð¾Ð°Ð¾Ð»ÑÐ¿Ð±Ð13#Ð°Ð¾Ð¾Ð»Ð±ÐÐ¿Ñ1Ð¿ÐÐ°Ð±Ð¾Ð¢Ð¾Ð»Ñ12ÐºÐÐ»Ð¾Ð°Ð¿Ð¾Ð±Ñ5Ð¾Ð»ÑÐ¾Ð°Ð»ÐÐ¿Ð±10Ð±Ð¾Ð°ÐÐ¿Ð¾ÑÐ»Ð²3Ð¾Ð»Ð#Ð°Ð¾ÑÐ¿Ð±0ÐÑÐ¿#Ð¾Ð»Ð¾Ð°Ð±";
$key="Попаболь";

//Обработка входящих данных
$coded_string_no_utf8=utf8_decode($coded_string);
echo $coded_string_no_utf8;

//Расшифровка
preg_match_all("/(\d+)(\D+)/",$coded_string_no_utf8,$coded_array,PREG_PATTERN_ORDER);
$coded_array_merged=array_combine($coded_array[1],$coded_array[2]);
ksort($coded_array_merged);
    echo "<PRE>";
    print_r($coded_array_merged);
    echo "<PRE>";
    //echo $value;

foreach ($coded_array_merged as $s) {
    $a = preg_replace("/[$key]/u", "", $s);
    echo $a;
}