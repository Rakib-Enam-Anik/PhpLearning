<?php
class base{
    public static $name = "Rakib Enam";

}
class derived extends base{
    public static function show(){
        echo parent::$name;
    }
}


$test = new derived("wow");

$test->show();

//echo base::$name;

//base::show();

?>