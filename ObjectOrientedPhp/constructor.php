<?php
class person{
    public $name;
    public $age ;

    function __($name = "No Name", $age= 0){
        $this->name = $name;
        $this->age = $age;
    }

    function show(){
        echo $this->name ."-" .$this->age. "\n";
    }
}

$p1 = new person();
$p2 = new person("Rakib",23);
$p3 = new person("Rakib Enam",27);

$p1->show();
$p2->show();
$p3->show();

?>