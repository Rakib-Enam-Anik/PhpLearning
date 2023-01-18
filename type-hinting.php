<?php
class school{
    public function getNames($names){
        foreach ($names->Names() as $name){
            echo $name . "<br>";
        }

    }
}

class student{
    public function Names(){
        return ["Ram", "Krishan","Gopal"];
    }
}

class library{

}

$lib = new library();
$stu = new student();
$sch = new school();

$sch->getNames($stu);

?>