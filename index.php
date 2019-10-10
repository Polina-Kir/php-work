<?php

require_once 'vendor/tpl.php';
require_once 'Request.php';

$request = new Request($_REQUEST);

//print $request; // display input parameters (for debugging)

$cmd = $request->param('cmd')
    ? $request->param('cmd')
    : 'list_form';

if ($cmd === 'list_form') {
    $data = [
        'title' => 'Nimekiri',
        'template' => 'list.html',

    ];

    print renderTemplate('list.html', $data);

} else if ($cmd === 'add_form') {

    $data = [
        'title' => 'Lisa',
        'template' => 'add.html',

    ];

    print renderTemplate('add.html', $data);

} /*else if ($cmd === 'ctf_calculate') {

    $input = intval($request->param('temperature'));
    $result = celsiusToFahrenheit($input);
    $message = "$input degrees in Celsius is $result degrees in Fahrenheit";

    $data = [

        'template' => 'ex4_result.html',
        'message' => $message
    ];

    print renderTemplate('templates/ex4_main.html', $data);

} else if ($cmd === 'ftc_calculate') {

    $input = intval($request->param('temperature'));
    $result = fahrenheitToCelsius($input);
    $message = "$input degrees in Fahrenheit is $result degrees in Celsius";
    $data = [

        'template' => 'ex4_result.html',
        'message' => $message
    ];

    print renderTemplate('templates/ex4_main.html', $data);

} */else {
    throw new Error('programming error');
}

/*function fahrenheitToCelsius($temp) {
    return round(($temp - 32) / (9 / 5), 2);
}

function celsiusToFahrenheit($temp) {
    return round($temp * 9 / 5 + 32, 2);
}*/

