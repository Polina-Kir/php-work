<?php

$counts = [];

for($i = 0; $i < 100000; $i++){
    $value = rand(1, 5);
    if (isset($counts[$value])){
        $counts[$value]++;
    }else{
        $counts[$value] = 1;
    }

}
print_r($counts);
