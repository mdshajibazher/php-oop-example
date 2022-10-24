<?php

interface BaseAnimal{
    function isAlive();
    function  canEat($param1,$param2);
}

class Cat implements BaseAnimal{
    function isAlive(){
        // TODO: Implement isAlive() method.
    }
    function  canEat($param1,$param2){
        // TODO: Implement canEat() method.
    }
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}

class Human implements BaseHuman{
    function isAlive()
    {
        // TODO: Implement isAlive() method.
    }
    function canTalk()
    {
        // TODO: Implement canTalk() method.
    }

    function canEat($param1, $param2)
    {
        // TODO: Implement canEat() method.
    }
}

$h = new Human;
$c = new Cat;
echo $h instanceof BaseAnimal;
echo $c instanceof BaseHuman;