<?php

function random_rus_letter ($serial_number, $sumbol=NULL, $key_splitted) {

    $encryption_array[$serial_number]=$serial_number;
    $key_splitted[]=$sumbol;

    shuffle($key_splitted);

    foreach ($key_splitted as $key_letter) {

        $encryption_array[$serial_number].=utf8_encode($key_letter); //utf8_encode(

    }

    return $encryption_array[$serial_number];

}


// Тут текст для шифровки

$input_data="Дети Мафусаила книга"; // Прячемое
$key="Попаболь"; //Ключ

// Разделение текста по символам и удаление пустот

$symbols = preg_split('//u', $input_data, -1, PREG_SPLIT_OFFSET_CAPTURE);

$key_splitted=preg_split('//u', $key, -1);
$array_empty_kill=array(NULL);
$key_splitted=array_diff($key_splitted, $array_empty_kill);

// Шифрование - алгоритм

$i=0;
$encryption_array=[];

foreach ($symbols as $serial_number => $letter) {

    $translit_letter=$letter[0]; //utf8_encode(

    if ($letter[0] == NULL) {

        $symbol="#";
        $encryption_array[$serial_number]=random_rus_letter($serial_number, $symbol, $key_splitted);

    }
    elseif ($letter[0] == " ") {

        $symbol="#";
        $encryption_array[$serial_number]=random_rus_letter($serial_number, $symbol, $key_splitted);

    }
    else {

        $symbol=$translit_letter;
        $encryption_array[$serial_number]=random_rus_letter($serial_number, $symbol, $key_splitted);

    }

$i++;

}
//Перемешанный массив

echo "<PRE>";
print_r ($encryption_array);
echo "</PRE>";

shuffle($encryption_array);

//Вывод результата

foreach ($encryption_array as $code) {

    echo $code;

}

echo "<PRE>";
print_r ($encryption_array);
echo "</PRE>";




