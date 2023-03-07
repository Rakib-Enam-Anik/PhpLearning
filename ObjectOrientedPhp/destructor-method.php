<?php
class abc{
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect();
    }
    public function __construct(){
        echo "This is Construct function\n";
    }

    public function insert(){
        echo "Hello Everyone\n";
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }
}

$test = new abc();

$test->hello();
