 <?php

$file = 'data/grades.txt';

$lines = file($file);
$sum = 0;
foreach ($lines as $line){
    $part = explode(";", trim($line));
    $sum+= $part[1];
}
print $sum/count($lines);
