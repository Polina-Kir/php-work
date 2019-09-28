<?php

$numbers = [3, 2, 5, 6];

$str = join(", ", $numbers);
$list_again = explode(", ", $str);
print_r($list_again);
