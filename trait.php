<?php

trait NumberSeriesOne{
    function numberSeriesA(){
        echo "number series A\n";
    }

    function numberSeriesB(){
        echo "number series B\n";
    }
}

trait AnotherTrait{
    use NumberSeriesOne;

    function something(){
        echo "hello";
    }
}


class NumberSeries{
    use NumberSeriesOne{
        numberSeriesA as modifiedNumberSeriesA;
    }

    function modifiedNumberSeriesA(){
        echo "number series A\n";
    }

}

$ns = new NumberSeries;
$ns->numberSeriesA();