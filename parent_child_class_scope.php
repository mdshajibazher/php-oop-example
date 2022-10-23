<?php


class ParentClass{
    public $name;
    function __construct($name){
        $this->name = $name;
        //Execute child class method if exists in child otherwise execute child class method
        $this->sayHi();
    }

    function sayHi(){
        echo "Hi from parent class\n";
    }
}

class ChildClass Extends ParentClass{
    function sayHi(){
        echo "Hello from child class\n";
        //Execute forcefully parent class method
        parent::sayHi();
    }
}

$cc = new ChildClass("Child Variable");
