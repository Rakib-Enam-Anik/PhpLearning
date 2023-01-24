<?php

class myClass{
    public $test;
}

class_alias("myClass", "mc");

$a = new myClass();
$b = new mc();

$b->test = "Hello";
echo $b->test;