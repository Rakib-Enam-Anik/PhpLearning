<?php

require 'products.php';
require 'testing.php';

function wow(){
    echo "Wow from Index File.<br>";
}

$obj = new test\product();
$obj1 = new pro\product();

pro\wow();