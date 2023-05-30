<?php
/*
Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", 
where "Scott" is an argument value of the method within the class.
*/

class user_message{
    public $message = 'Hello All, I am';
    public function introduce($name){
        return $this->message . $name;
    }
}
$mymessage = New user_message();
echo $mymessage->introduce('Rakib')."\n";
?>