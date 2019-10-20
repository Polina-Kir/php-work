<?php

class item{
    public $firstName;
    public $lastName;
    public $phone;

    public function __construct($firstName, $lastName, $phone) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
    }

    public function __toString() {
        return "item{firstName:$this->firstName, lastName:$this->lastName, phone:$this->phone}";
    }
}