<?php
trait MyTrait{
    public function getTraitName(){
        return __TRAIT__;
    }
}

class MyClass{
    use MyTrait;
}

$obj = new MyClass();
echo $obj->getTraitName();