<?php

class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }
    function sayName(){
        echo "My Name Is {$this->name}\n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

$h1 = new Human;
$h1->name = "Pappu";
$h1->sayHi();


$h2 = new Human;
$h2->name = "Shajib";
$h2->sayHi();





$c1 = new Cat;
$d1 = new Dog;

$c1->sayHi();
$d1->sayHi();