<?php
class student{
    public $ccourse;
    private $first_name;
    private $last_name;
    private $detail = ['name'=>'Test Name', 'age'=>'20'];

    public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
}
public function __isset($name){
    echo isset($this->detail[$name]);
}
}

$test = new student();
echo isset($test->age);