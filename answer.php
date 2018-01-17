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

function capitalizeFirstLetter(string $word) : string {}