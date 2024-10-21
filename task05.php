<?php

function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    } elseif ($pow > 0) {
        return $val * power($val, $pow - 1);
    } else {
        return 1 / power($val, -$pow);
    }
}

// Примеры использования функции
//echo power(2, 3);  // Выведет 8 
echo power(5, -2);  // Выведет 0.04 