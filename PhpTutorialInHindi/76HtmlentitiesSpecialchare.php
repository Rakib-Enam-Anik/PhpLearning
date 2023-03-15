<?php
$str = "A 'quote' is <b> bold  </b> ";

$str = '<a href="https://www.rakibenam.com">RakibEnam Website</a>';

echo $str . "<br><br>";

echo htmlentities($str, ENT_QUOTES);