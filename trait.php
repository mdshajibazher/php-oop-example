<?php

trait NumberSeriesOne{
    function numberSeriesA(){
        echo "number series A\n";
    }

    function numberSeriesB(){
        echo "number series B\n";
    }

    abstract function mustImplementMethod();
}

trait AnotherTrait{

    function something(){
        echo "hello";
    }
}


class NumberSeries{
    use NumberSeriesOne,AnotherTrait{
        NumberSeriesOne::numberSeriesA as modifiedNumberSeriesA;
    }

    function modifiedNumberSeriesA(){
        echo "number series A\n";
    }

    function mustImplementMethod(){
        echo "Something";
    }

}

$ns = new NumberSeries;
$ns->numberSeriesA();