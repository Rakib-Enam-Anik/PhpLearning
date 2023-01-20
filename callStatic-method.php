<?php
class student{
    private static function hello($name){
        echo "Hello $name";
    }

    public static function __callStatic($method, $args){
        if(method_exists(__class__, $method)){
            call_user_func_array([__class__,$method], $args);
        }else{
            echo "Method does not exist : $method";
        }
    }
}

student :: hello("Rakib Enam Anik");