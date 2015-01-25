<?php

//Функция разделения слов по символам
function chopchop_string($string) {

    preg_match_all("/(\S)/u",$string,$chop_string,PREG_PATTERN_ORDER);
    return $chop_string[0];

}




//Входящие данные
$coded_string="16ÐºÐ»Ð¾ÐÐ°ÑÐ¾Ð±Ð¿20Ð¾Ð±Ð¿ÐÐ°ÑÐ¾Ð°Ð»15ÐÐ¿Ð¾Ð±Ð¾Ð»#ÑÐ°8Ð±Ð¿Ð°Ð»Ð¾ÑÐ¾ÐÑ1Ð»ÐÑÐ¾Ð¿Ð¾Ð±Ð°Ð2Ð±Ð»ÐµÑÐÐ¿Ð¾Ð°Ð¾3Ð±Ð¾Ð¾Ð°Ð¿ÑÐÐ»Ñ18Ð¾ÑÐ±Ð¸Ð°Ð¿Ð»ÐÐ¾0Ð#Ð»Ð±Ð°Ð¾Ð¾Ð¿Ñ7ÑÐ¿Ð°Ð¾Ð±Ð»Ð¾ÐÐ°14ÑÐ°Ð±Ð¿Ð°ÐÐ¾Ð»Ð¾4Ð¿ÐÑÐ¾Ð¸Ð»Ð±Ð°Ð¾19Ð¿Ð³Ð¾ÑÐ±ÐÐ¾Ð»Ð°9ÑÐ¾ÑÐ»ÐÐ±Ð¾Ð°Ð¿5Ð±Ð¾Ð¾Ð°Ð¿#ÑÐÐ»12Ð»Ð±Ð°Ð¾Ð¸Ð¾ÐÐ¿Ñ13Ð¿Ð¾Ð»Ð»ÐÑÐ°Ð±Ð¾21#Ð¾ÑÐ»Ð°Ð±Ð¿Ð¾Ð11Ð±Ð»Ð¾ÑÐÐ°Ð¿Ð°Ð¾6Ð»Ð¾Ð±Ð¿Ð°ÐÐÑÐ¾10Ð¾ÐÑÑÐ»Ð¾Ð±Ð¿Ð°17ÐÐ¿Ð±Ð»Ð°Ð¾Ð¾Ð½Ñ";
$key="Попаболь";

//Обработка входящих данных
$coded_string_no_utf8=utf8_decode($coded_string);
echo $coded_string_no_utf8;
$key_array_ready=chopchop_string($key);


//Расшифровка
preg_match_all("/(\d+)(\D+)/",$coded_string_no_utf8,$coded_array,PREG_PATTERN_ORDER);
$coded_array_merged=array_combine($coded_array[1],$coded_array[2]);
ksort($coded_array_merged);
    echo "<PRE>";
    //print_r($coded_array_merged);
    print_r(chopchop_string($key));
    echo "<PRE>";
    //echo $value;

foreach ($coded_array_merged as $letter_coded) {

    echo "<br />".$letter_coded."<br />";

    $letter_array_ready=chopchop_string($letter_coded);

    print_r($letter_array_ready);
    print_r($key_array_ready);
    $letter_decoded=array_diff($letter_array_ready, $key_array_ready);
    if ($letter_decoded==NULL) {

    }
    //$a = preg_replace("/[$key]/u", "", $s);
    print_r($letter_decoded);
}