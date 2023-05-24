<?php
//Write a PHP script that checks if a string contains another string.

$pattern = '/[^\w]foxs\s/';
if(preg_match($pattern, 'The quick brown fox jumps over the lazy dog'))
{
    echo "'fox' is present...".".\n";
}
else
echo "'fox' is not present ..."."\n";

?>