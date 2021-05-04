<?php
class Dog{
    var $name;
    var $age;
    function __construct($name,$age)
    {
        $this->age = $age;
        $this->name = $name;
    }

    function setName($name){
        $this->name = $name;
    }
    function eat(){
        echo $this->name . " is eating!";
    }
    function show(){
        echo $this->name." is eating! and he is ";
        echo $this->age . " year!";
    }
}

$dog = new Dog('dog',12);
//$dog->setName('dog');
$dog->show();