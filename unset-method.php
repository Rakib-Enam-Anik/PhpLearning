<?php
class student{
    public $course = "PHP";
    private $first_name;
    private $last_name;

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
    }
    public function __unset($property){
        unset($this->$property);
    }
}

$test = new student();
$test->setName("Rakib","Enam");

unset($test->last_name);
print_r($test);