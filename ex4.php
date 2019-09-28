<?php

foreach (range(1, 15) as $numbers){


    if ($numbers % 3 === 0 && $numbers % 5 === 0){
        print "FizzBuzz\n";
    } elseif ($numbers % 3 === 0){
        print "Fizz\n";
    } elseif( $numbers % 5 === 0){
        print "Buzz\n";
    }else{
        print $numbers . PHP_EOL;
    }
}
