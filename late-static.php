<?php
class base{
    protected static $name = "Yahoo";

    public function show(){
        echo static:: $name;
        echo self:: $name;
    }
}

class derived extends base{
    protected static $name = "Baba";
}

$test = new derived();

$test->show();