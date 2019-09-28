<?php

$numbers = [1, 2, 5, 6, 2, 11, 2, 7];
print_r(get_Odd_Numbers($numbers));
function get_Odd_Numbers($numbers){
    $odd_num =[];
    foreach ($numbers as $number){
        if($number%2 === 1){
            $odd_num[] = $number;
        }
    }

    return $odd_num;
}
