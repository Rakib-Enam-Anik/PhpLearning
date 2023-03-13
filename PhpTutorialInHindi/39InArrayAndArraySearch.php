<?php

$a = array(array('p','h'), array('p', 'r'), 'o');

if(in_array(array('p','k'), $a, true)){
    echo "Find Successfully.";
}else{
    echo "Can't Find.";
}
?>