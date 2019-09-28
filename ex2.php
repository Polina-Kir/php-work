<?php

$numbers = [1, 2, '3', 6, 2, 3, 2, 3];

var_dump(is_In_List($numbers, 2));
var_dump(is_In_List($numbers, 4));

function is_In_List($list, $need){
    foreach ($list as $i){
        if($i === $need){
            return true;
        }
    }
    return false;
}