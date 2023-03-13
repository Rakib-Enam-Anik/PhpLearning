<?php
$a = "orange";
$color = array('a' => 'red', 'b' => 'green', 'c' => 'blue');

extract($color, EXTR_PREFIX_SAME, "test");

echo "Value of a : $a <br>";
echo "Value of a : $test_a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";