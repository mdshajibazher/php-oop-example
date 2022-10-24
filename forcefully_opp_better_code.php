<?php

class Shape{

}

class Shapes{
    private $shapes;

    function __construct(){
        $this->shapes = [];
    }

    function addShape(Shape $shape){
        array_push($this->shapes,$shape);
    }

    function totalShapes(){
        echo count($this->shapes);
    }
}

class Rectangle extends Shape {

}
class Triangle extends Shape{

}

class Student{

}

$shapesCollection = new Shapes;
$shapesCollection->addShape(new Rectangle);
$shapesCollection->addShape(new Triangle);
//If we run $shapesCollection->addShape(new Student); It will throws an error Argument #1 ($sha
//pe) must be of type Shape

$shapesCollection->totalShapes();