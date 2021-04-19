<?php

$data = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];

function insertionSort($data)
{
    $dataLength = count($data);
    for ($i = 1; $i < $dataLength; $i++) {
        $current = $data[$i];
        $j = $i - 1;
        while ($j >= 0 && $data[$j] > $current) {
            $data[$j + 1] = $data[$j];
            $j--;
        }
        $data[$j + 1] = $current;
    }
    return $data;
}

var_dump(insertionSort($data));
