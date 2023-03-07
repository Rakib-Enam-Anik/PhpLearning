<?php

class myClass{
    public $var1;
    public $var2 = "hello";
    public $var3 = 100;
    private $var4;

    function __construct(){
        $this->var1 = "Wow";
        $this->var2 = "Yahoo";
        print_r(get_object_vars($this));
    }
}

$obj = new myClass();

$class_vars = get_object_vars($obj);

print_r($class_vars);

?>