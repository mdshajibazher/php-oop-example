<?php
class Student{
    private $name;
    private $age;
    private $class;

    function __construct($name='',$age='22',$class=''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop){
        return $this->prop;
    }
    public function __set($prop,$value){
        return $this->prop = $value;
    }
}

$s = new Student;
$s->name = "kamal";
echo $s->name;