<?php
/*
Write a PHP class that sorts an ordered integer array with the help of sort() function.
Sample array : array(11, -2, 4, 35, 0, 8, -9)
Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
*/

class array_sort{
    protected $_asort;
    public function __construct(array $asort){
        $this->_asort = $asort;
    }
}