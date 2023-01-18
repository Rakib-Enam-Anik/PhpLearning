<?php
    trait hello{
    public function sayhello(){
        echo "Hello everyone";
    }
}

trait bye{
    public function saybye(){
        echo "Bye Bye everyone";
    }
}

class base{
    use hello;
}

class base2{
    use bye;
}

$test = new base();
$test2 = new base2();

$test->sayhello();
$test2->saybye();