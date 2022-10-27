<?php

class Planet{
    static function echoName(){
        echo self::getName();
    }

    static function getName(){
        return "planet";
    }
}

class Earth extends Planet{
    
}

Planet::echoName();