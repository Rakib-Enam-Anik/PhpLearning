<?php
class MyClass{
    public function MyMethod(){

    }
}

$obj = new MyClass();

if(method_exists($obj,'MyMethods')){
    echo "This Method is eexist.";
}else{
    echo "This Method is not exist.";

}

?>