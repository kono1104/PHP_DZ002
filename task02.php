<?php

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'add':
            return $arg1 + $arg2;
        case 'subtract':
            return $arg1 - $arg2;
        case 'multiply':
            return $arg1 * $arg2;
        case 'divide':
            if ($arg2 != 0) {
                return $arg1 / $arg2;
            } else {
                return "Error: Division by zero";
            }
        default:
            return "Error: Unsupported operation";
    }
}

// Пример использования
//echo mathOperation(5, 3, 'add');  // Вернет 8
echo mathOperation(5, 3, 'subtract');  // Вернет 2
//echo mathOperation(5, 3, 'multiply');  // Вернет 15
//echo mathOperation(6, 2, 'divide');  // Вернет 3
//echo mathOperation(6, 0, 'divide');  // Вернет "Error: Division by zero"
//echo mathOperation(6, 2, 'power');  // Вернет "Error: Unsupported operation"