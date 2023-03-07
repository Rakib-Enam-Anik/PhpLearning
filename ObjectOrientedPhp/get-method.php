<?php

class abc{
    private $data = ["name"=>"Rakib Enam", "course"=>"PHP", "fee"=>"2000"];

    public function __get($key){
        if(array_key_exists($key, $this->data)){
            return $this->data[$key];
        }else{
            return "This key($key) is not defined.";
        }
    }
}

$test = new abc();
echo $test->name;

?>
