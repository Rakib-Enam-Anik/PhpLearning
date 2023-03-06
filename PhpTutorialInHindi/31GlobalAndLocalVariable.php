<?php
$x = 10;
function test(){
    global $x;
    echo "Variable X inside function : $x <br> ";
}

test();
echo "Varible X outside function : $x";
?>