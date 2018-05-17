<?php
//Compare two strings by comparing the sum of their values (ASCII character code).
//For comparing treat all letters as UpperCase.
echo "<b>"."Task 1"."</b>"."</br>";

function compareStrings ($string1, $string2){
    
    $sum1 = 1;
    $sum2 = 1;
    $string1 = strtoupper($string1);
    $string2 = strtoupper($string2);

    if (strlen($string1) === strlen($string2)) {
     
        for ($i = 0; $i < strlen($string1); $i++){
            $sum1 += ord($string1[$i]);
            $sum2 += ord($string2[$i]);
        } if ($sum1==$sum2) {
            return true; 
        } else{
            return false; 
        }
    }

    else{
        return false;    
    }
}

$string1 = "abclefg";
$string2 = "abCdefg";
$res = compareStrings ($string1, $string2);

    if ($res==true) {
        echo "Strings \"{$string1}\" and \"{$string2}\" are equals."."</br></br>";
    } else {
        echo "Strings \"{$string1}\" and \"{$string2}\" are not equals."."</br></br>";
    }



    







?>