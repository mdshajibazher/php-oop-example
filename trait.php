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
}


class NumberSeries{
    use AnotherTrait;

}

$ns = new NumberSeries;
$ns->numberSeriesA();