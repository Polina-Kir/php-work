<?php

$numbers = [1, 2, '3', 6, 2, 3, 2, 3];

foreach ($numbers as $number){
    $i = 0;
    if ($number ===3){
        $i ++;
    }
}
print "found it $i times";