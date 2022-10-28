<?php

class StringUtility{
    private $string;
    private $search;
    function __construct($string)
    {
        $this->string = $string;
    }

    function search($text){
        $this->search = $text;
        return $this;
    }

    function replace($text){
        if(!isset($this->search)){
            throw new Exception("Nothing to replace");
        }

        $this->string = str_replace($this->search,$text,$this->string);
        return $this;
    }

    function uppercase(){
        $this->string = strtoupper($this->string);
        return $this;
    }

    function lowercase(){
        $this->string = strtolower($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }

}





$s = new StringUtility("Hello World");
$s
->search("World")
->replace("Peter")
->search("Hello")
->replace("Hi")
->uppercase()
->print();