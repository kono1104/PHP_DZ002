<?php

function formatTime() {
    $hours = date('G');
    $minutes = date('i');
    $hours_string = ($hours == 1 || $hours == 21) ? 'час' : 'chasov';
    $minutes_string = ($minutes == 1 || $minutes == 21 || $minutes == 31 || $minutes == 41 || $minutes == 51) ? 'минута' : (($minutes >= 2 && $minutes <= 4) || ($minutes >= 22 && $minutes <= 24) || ($minutes >= 32 && $minutes <= 34) || ($minutes >= 42 && $minutes <= 44) || ($minutes >= 52 && $minutes <= 54) ? 'минуты' : 'minut');

    return "$hours $hours_string $minutes $minutes_string";
}

// Пример использования функции
echo formatTime();  //Выведет 10 часа 48 минут