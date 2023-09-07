<?php

/*
 * Complete the 'insertionSort1' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY arr
 */

function insertionSort1($n, $arr) {
    // Write your code here
    $last = $arr[$n-1];


    for ($i = $n - 2; $i >= 0; $i--) {

        if ($arr[$i] > $last) {

            $arr[$i+1] = $arr[$i];

            echo implode(" ", $arr) . "\n";
        } else {
            $arr[$i+1] = $last;
            echo implode(" ", $arr) . "\n";
            break;
        }
    }


    if ($arr[0] > $last) {
        $arr[0] = $last;

        echo implode(" ", $arr) . "\n";
    }

    return $arr;
};

$n = 5;
$arr = [2, 4, 6, 8, 3];

$result = insertionSort1($n, $arr);

echo $result; // 2 4 6 8 8
              // 2 4 6 6 8
              // 2 4 4 6 8
              // 2 3 4 6 8



/*
 * Complete the 'insertionSort2' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER_ARRAY arr
 */

function insertionSort2($n, $arr) {
    // Write your code here
    for ($i = 1; $i < $n; $i++) {
        $current = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $current) {
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $current;
        echo implode(" ", $arr) . "\n";
    }

    return $arr;

};

$n = 6;
$arr = [1, 4, 3, 5, 6, 2];

$result = insertionSort2($n, $arr);

echo $result; // 1 4 3 5 6 2
// 1 3 4 5 6 2
// 1 3 4 5 6 2
// 1 3 4 5 6 2
// 1 2 3 4 5 6



function insertionSort(&$arr)
{
    // Iteramos a través del array a ordenar
    for ($i = 0; $i < count($arr); $i++) {
        $val = $arr[$i]; // Guardamos el valor actual
        $j = $i - 1;

        // Mover los elementos mayores que $val hacia adelante
        while ($j >= 0 && $arr[$j] > $val) {
            $arr[$j + 1] = $arr[$j]; // Desplazamos el elemento hacia adelante
            $j--;
        }

        $arr[$j + 1] = $val; // Insertamos $val en la posición correcta
    }
};

$handle = fopen("php://stdin", "r");
$t = fgets($handle);
$arr = explode(' ', fgets($handle));

insertionSort($arr);

// Imprimir los elementos ordenados
foreach ($arr as $value) {
    print $value . " ";
};

fclose($handle);

// 6
// 1 4 3 5 6 2
// 1 4 3 5 6 2
// 1 3 4 5 6 2
// 1 3 4 5 6 2
// 1 3 4 5 6 2
// 1 2 3 4 5 6



function runningTime($arr) {
    $shifts = 0; // Counter for the number of shifts (or moves)
    
    for ($i = 1; $i < count($arr); $i++) {
        $val = $arr[$i];
        $j = $i - 1;
        
        while ($j >= 0 && $arr[$j] > $val) {
            $arr[$j + 1] = $arr[$j];
            $j--;
            $shifts++; // Increment shifts count on each shift/move
        }
        
        $arr[$j + 1] = $val;
    }
    
    return $shifts; // Return the total number of shifts
};

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = runningTime($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);





/*
 * Complete the 'countingSort' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function countingSort($arr) {
    // Write your code here
    $count = array_fill(0, 100, 0);
    $result = [];

    foreach ($arr as $value) {
        $count[$value]++;
    }

    for ($i = 0; $i < count($count); $i++) {
        for ($j = 0; $j < $count[$i]; $j++) {
            $result[] = $i;
        }
    }

    return $result;

};


    

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = countingSort($arr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);










?>