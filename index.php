<?php
require_once("vendor/tpl.php");
require_once("item.php");
require_once("connectionsList.php");
require_once("Request.php");

$request = new Request($_REQUEST);

$cmd = $request->param('cmd')
    ? $request->param('cmd')
    : 'list_page';

if ($cmd === "list_page") {
    $data = [
        'todoItems' => getTodoItems(),
        'template' => 'list.html',
    ];
    print renderTemplate('list.html', $data);
} else if ($cmd === "add_page") {
    $data = ['template' => "add.html"];
    print renderTemplate('add.html', $data);
} else if ($cmd === "add") {
    $todoItemFName = urlencode($_POST["firstName"]);
    $todoItemLName = urlencode($_POST["lastName"]);
    $todoItemPhone = urlencode($_POST["phone"]);
    $todoItem = new item($todoItemFName, $todoItemLName, $todoItemPhone);
    addTodoItem($todoItem);
    $data = [
        'todoItems' => getTodoItems(),
        'template' => 'list.html',
    ];
    print renderTemplate('list.html', $data);
}

