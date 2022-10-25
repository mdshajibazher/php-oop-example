<?php

class DistrictCollection implements IteratorAggregate {
    private array $districts = [];


    function add($district){
        array_push($this->districts,$district);
    }

    function getDistricts(){
        return $this->districts;
    }

    public function count(): int
    {
        return count($this->districts);
    }

    function getIterator() : \Traversable
    {
        return new \ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add("Dhaka");
$districts->add("Chattagram");
$districts->add("Bogra");
$districts->add("Rajshahi");
echo "District count is : ".$districts->count()."\n";
print_r($districts);



