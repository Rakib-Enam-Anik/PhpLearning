<?php
/*
Write a PHP script to : -
a) transform a string all uppercase letters.
b) transform a string all lowercase letters.
c) make a string's first character uppercase.
d) make a string's first character of all the words uppercase.
*/

//all uppercase letters
print(strtoupper("the quick brown fox jumps over the lazy dog"))."\n";
//all lowercase lletters
print(strtolower("The Quick BROWN FOX JUMPS OVER THE LAZY DOG"))."\n";
//make a string's first character uppercase
print(ucfirst("the quick brown fox jumps over the lazy dog."))."\n";
//make a string's first character of all the words uppercase
print(ucwords("the quick brown fox jumps over the lazy dog."))."\n";
?>