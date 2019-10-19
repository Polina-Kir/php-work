<?php

const DATA_FILE = "data.txt";

function addTodoItem($item) {
    $line = "$item->firstname;$item->lastname;$item->phone";
    file_put_contents(DATA_FILE, $line . PHP_EOL, FILE_APPEND);
}

function getTodoItems() {
    $lines = file(DATA_FILE);
    $todoItems = [];
    foreach ($lines as $line) {
        list($firstname, $lastname, $phone) = explode(";", $line);
        $todoItem = new item($firstname, $lastname, $phone);
        $todoItems[] = $todoItem;
    }
    return $todoItems;
}

