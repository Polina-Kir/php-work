<?php

class item{
    public $firstname;
    public $lastname;
    public $phone;

    public function __construct($firstname, $lastname, $phone){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->phone = $phone;
    }

    public function __toString(){
        return "TodoItem{firstname:$this->firstname, lastname:$this->lastname, phone:$this->phone}";
    }
}