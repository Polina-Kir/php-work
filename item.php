<?php

class item{
    public $firstName;
    public $lastName;
    public $phone1;
    public $phone2;
    public $phone3;

    public function __construct($firstName, $lastName, $phone1, $phone2 = "", $phone3 = ""){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone1 = $phone1;
        $this->phone2 = $phone2;
        $this->phone3 = $phone3;
    }

    public function __toString(){
        return "item{firstName:$this->firstName, lastName:$this->lastName, phone:$this->phone1}";
    }
}