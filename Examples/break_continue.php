  <?php
   //Вывод двумерного массива, числа меньше 0 не выводим, если есть числа больше 7 - прерываем вывод
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [-1, 8, 9], 
        [10, 11, 12]
    ];

    // Для наглядности используем разные циклы, работает в любых сочетаниях for, foreach и while
    foreach ($matrix as $rowIndex => $row) {
        echo "Строка $rowIndex: ";
        $count = count($row);
        for ($colIndex = 0; $colIndex < $count; $colIndex++) {
            $value = $row[$colIndex];
        
            if ($value < 0) {
                // Пропускаем отрицательные
                continue 1;  // 1 = текущий цикл (for), так же как просто continue
            }
        
            if ($value > 7) {
                echo "Найден элемент > 7 в [$rowIndex][$colIndex]: $value. ";
                // Выходим из ВСЕХ циклов сразу
                break 2;  // 2 = внешний foreach + внутренний for
            }
        
            echo "$value ";
        }
        echo "<br>";
    }