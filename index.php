<?php
require_once("vendor/tpl.php");
require_once("Item.php");
require_once("connectionsList.php");
require_once ("Request.php");


$request = new Request($_REQUEST);

$cmd = $request->param('cmd')
    ? $request->param('cmd')
    : 'show_list_page';

if ($cmd === "show_list_page") {
    $data = [
        'todoItems' => getTodoItems(),
        'template' => 'list.html',
    ];
    print renderTemplate('main.html', $data);
} else if ($cmd === "show_add_page") {
    $data = ['template' => "add.html"];
    print renderTemplate('main.html', $data);}
else if ($cmd === "add") {
    $todoItemFName = $_POST["firstname"];
    $todoItemLName = $_POST["lastname"];
    $todoItemPhone = $_POST["phone"];
    $todoItem = new Item($todoItemFName, $todoItemLName, $todoItemPhone);
    addTodoItem($todoItem);
    $data = [
        'todoItems' => getTodoItems(),
        'template' => 'list.html',
    ];
    print renderTemplate('main.html', $data);
}

