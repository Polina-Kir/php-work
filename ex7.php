<?php

$file = 'data/grades.txt';

$additional_data = ['history' => 5, 'chemistry' => 2];
/*foreach ($additional_data as $key => $value){
    $line = "$key;$value". PHP_EOL;
    file_put_contents($file, $line, FILE_APPEND);
}*/
/*$string = "";
foreach ($additional_data as $key => $value){
    $string  .= "$key;$value" . PHP_EOL;
}
file_put_contents($file,$string, FILE_APPEND);*/
$lines = [];
foreach ($additional_data as $key => $value){
    $lines[] = "$key;$value";
}
file_put_contents($file, join(PHP_EOL, $lines) . PHP_EOL, FILE_APPEND);