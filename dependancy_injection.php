<?php

    interface IStudent{
        function displayName();
    }

    class Student implements IStudent{
        private $name;
        function __construct($name)
        {
           $this->name = $name;
        }

        function displayName(){
            echo  "Hello from ".$this->name;
        }



    }


    // class StudentManager{
    //     function introduceStudent($name){
    //        $st =  new Student($name);
    //        $st->displayName();
    //     }
    // }

    class StudentManager{
        function introduceStudent(Student $student){
           $student->displayName();
        }
    }

    $studentObject = new Student("Shajib");
    $sm = new StudentManager;
    $sm->introduceStudent($studentObject);