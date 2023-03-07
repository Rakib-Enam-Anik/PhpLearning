<?php

class parentClass{

}

class childClass extends parentClass{

}

$obj = new childClass();

if(is_subclass_of($obj, 'parentClass')){
    echo "This \$obj is a Object of subClass of parentClass.";
}else{
    echo "This \$obj is not a Object of subClass of parentClass.";
}

?>