<?php

Class Color{
    private $color;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}

class favColor{
    private $data;
    private $color;

    function __construct($data_argument)
    {
        $this->data = $data_argument;
        $this->color = new Color("Red");
    }

    function updateColor($color){
        $this->color->setColor($color);
    }

    function setData($data){
        $this->data = $data;
    }

    //To Solve clone issue

    function __clone(){
        $this->color = clone $this->color;
    }
}

$fc1 = new FavColor("Some Data");
$fc2 = $fc1;
$fc2->setData("More Data");
//change $fc2 will also change $fc1 cause of shallow copy
print_r($fc1);
print_r($fc2);

//proper way to clone object
$fc3 = clone($fc2);
$fc3->setData("Clonned data");
print_r($fc2);
print_r($fc3);

// A problem arise in clone

$fc4 = clone($fc1);
$fc4->updateColor("Yellow");
print_r($fc1);
print_r($fc4);
