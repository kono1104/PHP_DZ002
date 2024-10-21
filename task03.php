<?php

$regions = [
    "Moskovskaya область" => ["Москва", "Зеленоград", "Клин"],
    "Liningradskaya область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    'Ryazanskaya область' => ['Рязань', 'Касимов', 'Скопин', 'Сасово'],
    "Respublika Татарстан" => ["Казань", "Набережные Челны", "Альметьевск", "Елабуга"],
    // ... и т.д.
];

function parsRegions(array $regions) : string
{
    $line = "";
    foreach ($regions as $key => $region) {
        $line .= "$key: ";
        $last = count($region) - 1;
        for ($i = 0; $i < $last; $i++) {
            $line .= "$region[$i], ";
        }
        $line .= $region[$last] . PHP_EOL;
    }

    return $line;
}

// Примеры использования функции
echo parsRegions($regions);