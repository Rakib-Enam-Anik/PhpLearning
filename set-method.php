<?php
class student{
    private $name;

    public function hello(){
        echo $this->name;
    }
    public function __get($property){
        echo "You are trying to access no existing ($property)\n";
    }
    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }else{
            echo "Property does not exist : $property";
        }
    }
}

$test = new student();
$test->name = "Rakib Enam";

$test->hello();