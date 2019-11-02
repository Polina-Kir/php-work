<?php
require_once("vendor/tpl.php");
require_once("item.php");
require_once("MySQLfunctions.php");
require_once("Request.php");


$cmd = 'list_page';
if (isset($_GET['cmd'])) {
    $cmd = $_GET['cmd'];
}

$saved = false;
if (isset($_GET['saved'])) {
    $saved = $_GET['saved'];
}


if ($cmd === "list_page") {
    $data = [
        'todoItems' => getPersons(),
        'saved' => $saved
    ];
    print renderTemplate('list.html', $data);

} else if ($cmd === "add_page") {
    $data = [
        'saved' => $saved
    ];
    print renderTemplate('add.html', $data);

} else if ($cmd === "add") {
    $firstName = urlencode($_POST["firstName"]);
    $lastName = urlencode($_POST["lastName"]);

    $phone1 = urlencode($_POST["phone1"]);
    $phone2 = urlencode($_POST["phone2"]);
    $phone3 = urlencode($_POST["phone3"]);


    $person = new item($firstName, $lastName, $phone1, $phone2, $phone3);
    addPerson($person);

    if (strlen($firstName) < 1 || strlen($lastName) < 1 || strlen($phone1) < 1) {
        header("Location: http://$_SERVER[HTTP_HOST]/index.php?cmd=add_page&saved=true");
    } else {
        header("Location: http://$_SERVER[HTTP_HOST]/index.php?cmd=list_page&saved=true");

    }
}

