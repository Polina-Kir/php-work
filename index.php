<?php

require_once 'vendor/tpl.php';
require_once 'Request.php';

$request = new Request($_REQUEST);

//print $request; // display input parameters (for debugging)

$cmd = $request->param('cmd')
    ? $request->param('cmd')
    : 'list_page';

if ($cmd === 'list_page') {
    $data = [
        'title' => 'Nimekiri',
        'template' => 'list.html',
    ];
    print renderTemplate('list.html', $data);

} else if ($cmd === 'add_page') {
    $data = [
        'title' => 'Lisa',
        'template' => 'add.html',
    ];
    print renderTemplate('add.html', $data);

} else {
    throw new Error('programming error');
}