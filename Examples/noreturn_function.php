<?php

function noReturnFunction(): void
{
    echo "Эта функция не возвращает значение." . PHP_EOL;

}

echo 'Функция noReturnFunction() возвращает: ' . noReturnFunction();