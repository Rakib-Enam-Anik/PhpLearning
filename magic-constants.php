<?php
namespace MyNamespace;

class MyClass{
    public function getNamespace(){
        return __CLASS__;
    }
}

$obj = new MyClass();
echo $obj->getNamespace();

?>