<?php


class Human
{
    private $name;
    private $age;

    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    function sayHi()
    {
        echo "Salam\n";
        $this->sayName();
        $this->sayAge();
    }

    function sayName()
    {
        echo "My Name Is {$this->name}\n";
    }
    function sayAge()
    {
        echo "My age Is {$this->age}\n";
    }
}

$h1 = new Human("Shajib",27);
$h1->sayHi();


