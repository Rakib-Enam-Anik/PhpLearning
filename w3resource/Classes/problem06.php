<?php
/*
Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request. Go to the editor
For example :
$mycalc = new MyCalculator( 12, 6);
echo $mycalc- > add(); // Displays 18
echo $mycalc- > multiply(); // Displays 72
*/

class MyCalculator{
    private $_fval, $_sval;
    public function __construct($fval, $sval){
        $this->_fval = $fval;
        $this->_sval = $sval;
    }

    public function add(){
        return $this->_fval + $this->_sval;
    }
    public function subtract(){
        return $this->_fval - $this->_sval;
    }
    public function multiply(){
        return $this->_fval * $this->_sval;
    }
    public function divide(){
        return $this->_fval / $this->_sval;
    }
}

$mycalc = new MyCalculator(12,6);
echo $mycalc-> add()."\n";
echo $mycalc-> subtract()."\n";
echo $mycalc-> multiply()."\n";
echo $mycalc-> divide()."\n";
?>