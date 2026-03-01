<?php

function noReturnFunction(): void {
    echo "Эта функция не возвращает значение.". PHP_EOL;
    
}

var_dump(noReturnFunction()); 
echo 'Функция noReturnFunction() возвращает: '. noReturnFunction(); 