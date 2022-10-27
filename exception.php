<?php


class Student{
    private $name, $age;
    function __construct($name,$age){
        $this->name = $name;
        if($age < 1){
            throw new Exception("Invalid age",1001);
        }
        $this->age = $age;
    }
}

try{
    $s = new Student("Rashid", 0);
}catch (Exception $e){
    echo "messge: ". $e->getMessage()."\n";
    echo "code: ".$e->getCode()."\n";
}finally {
    echo "It will always run";
}

