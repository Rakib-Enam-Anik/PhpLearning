<?php
/*
 Write a PHP script which decodes the following JSON string.
Sample JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
Expected Output :
Title : The Cuckoos Calling
Author : Robert Galbraith
Publisher : Little Brown
*/

function w3rfunction($value,$key){
    echo "$key : $value"."\n";
}
$a = '{"Title":"The Cuckoos Calling", 
    "Author":"Robert Galbraith",
    "Detail": {
        "Publisher": "Little Brown"
        }}';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"w3rfunction");

?>