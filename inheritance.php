<?php

class Animal{
    public function eat(){
        echo "I am eating\n";
    }

    public function  run(){
        echo "I am running\n";
    }

    public function  sleep(){
        echo "I am sleeping\n";
    }
}


class Human extends Animal{
    //Overwrite parent method
    public function  sleep(){
        echo "I am sleeping Overwrite\n";
    }
}

$shajib = new Human;
$shajib->sleep();