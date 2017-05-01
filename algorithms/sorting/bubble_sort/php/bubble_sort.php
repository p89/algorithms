<?php

function bubbleSortArr($array) {

    $resultArr = $array;

    // setting a fixed length for optimization
    $arrLength = count($resultArr)-1;
    $swapped = true;
    $temp;

    while ($swapped) {
        $swapped = false;
        
        for ($i = 0; $i < $arrLength; $i++) {
            if ($resultArr[$i] > $resultArr[$i+1]) 
            {
                $temp = $resultArr[$i];
                $resultArr[$i] = $resultArr[$i+1];
                $resultArr[$i+1] = $temp;
                $swapped = true;
            }
        }    
    }
    return $resultArr;
}

var_dump(bubbleSortArr([12,13,16,1,4,11,17,8,9,6,2]));