<?php
/*
Write a PHP program to convert word to digit.

Input: zero;
Output: 035681
*/

function word_digit($word){
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch($value){
            case 'zero':
                $result .=0;
                break;
                case 'one':
                    $result .='1';
                    break;
        }
    }
    return $result;
}

echo word_digit('zero;one;');
