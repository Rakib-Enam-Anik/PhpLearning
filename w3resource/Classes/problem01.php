<?php
//  Write a simple PHP class which displays the following string.
//  'MyClass class has initialized !'

class MyClass{
    public function __construct(){
        echo 'MyClass class has initialized !'."\n";
    }
}
$userclass = new MyClass;

?>