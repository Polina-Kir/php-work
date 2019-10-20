<?php

const DATA_FILE = "data.txt";

function addTodoItem($item) {
    $line = "$item->firstName;$item->lastName;$item->phone";
    file_put_contents(DATA_FILE, $line . PHP_EOL, FILE_APPEND);
}

function getTodoItems() {
    $lines = file(DATA_FILE);
    $todoItems = [];
    foreach ($lines as $line) {
        list($firstName, $lastName, $phone) = explode(";", $line);
        $todoItem = new item(urldecode($firstName), urldecode($lastName), urldecode($phone));
        $todoItems[] = $todoItem;
    }
    return $todoItems;
}

