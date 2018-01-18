<?php
/**
 * Created by PhpStorm.
 * User: schmi
 * Date: 1/17/2018
 * Time: 2:10 PM
 */

function isAnswer(int $guess) : bool {
    if($guess === 42) {
        return(true);
    } else {
        return(false);
    }
}

function capitalizeFirstLetter(string $word) : string {
    $newWord = strtoupper($word[0]) . substr($word, 1);
    return($newWord);
}

function sumArray(array $array) : float {
    $sum = 0.0;
    for($i = 0; $i < count($array); $i++) {
        $sum = $sum + $array[$i];
    }
    return($sum);
}

function stringRepeat(string $word, int $numTimes) : string {
    $repeated = "";
    for ($i = 0; $i < $numTimes; $i++) {
        $repeated = $repeated . $word;
    }
    return($repeated);
}

function dotProduct(array $left, array $right) : float {
    if(count($left) === count($right)) {
        $product = 0.0;
        for ($i = 0; $i < count($left); $i++) {
           $product = $product + $left[$i] * $right[$i];
        }
        return($product);
    } else {
        echo "Arrays must be the same size." . PHP_EOL;
        return(0.0);
    }
}