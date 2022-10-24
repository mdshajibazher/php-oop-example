<?php

//abstract class can't be instantiated
abstract class Shape{
    //abstract  method doesn't have any method body
    abstract protected function getArea();

    abstract function getPerimeter();

    final function exampleFinalFunction(){
        echo "This is a final function you cant overwrite it";
    }

}


class Rectangle extends Shape{
    private $base , $height;

    function __construct($base,$height){
        $this->base = $base;
        $this->height = $height;
    }
    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    protected function getArea()
    {
       return $this->base*$this->height;
    }

    function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
    }
}

class Triangle extends Shape{
    //abstract method must be implemented when extends abstract class
    protected function getArea()
    {
        // TODO: Implement getArea() method.
    }

    function getPerimeter()
    {
        // TODO: Implement getPerimeter() method.
    }

    function exampleFinalFunction(){
        echo "Fatal error: Cannot override fin
al method Shape::exampleFinalFun
ction()";
    }
}
$t = new Triangle();
$t->getPerimeter();
$t->exampleFinalFunction();
