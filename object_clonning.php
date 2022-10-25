<?php


class favColor{
    private $data;

    function __construct($data_argument)
    {
        $this->data = $data_argument;
    }

    function setData($data){
        $this->data = $data;
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


