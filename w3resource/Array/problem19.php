<?php
//Write a PHP script to print "second" and Red from the following array.
$color = array ( "color" => array (  "a" => "Red", "b"=> "Green", "c"=> "white"),
"numbers" => array (1, 2, 3, 4, 5, 6),
"holes" => array ( "First", 5 => "Second", "Third"));
echo $color["holes"][5]."\n"; //prints "second"
echo $color["color"]["a"]."\n"; //prints "Red"
?>
