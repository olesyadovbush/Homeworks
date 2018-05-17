<?php
//Task 1. Function that does :
//dolphin -> The Dolphin
//alaska -> Alaskalaska
echo "<b>Task 1</b></br>";

function changeBandName ($string) {
    
    $length = (strlen($string))-1;
    $start = $string[0];
    $end = $string[$length];
     if ($start === $end) {
      $rest = substr($string, 1); 
      $string = ucfirst("{$string}"."{$rest}");  
    } else {
        $string = ucfirst($string);
        $string = "The {$string}";
    }
return $string;
}

$string = 'alaska';
$res = changeBandName($string);
echo "{$string} =>{$res}</br>";

$string2 = "dolphin";
$res2 = changeBandName($string2);
echo "{$string2}=>{$res2}</br></br>";


//Task 2. Converter for strings with the results: "ATTGC" -> returns "TAACG", "GTAT" -> returns "CATA"
echo "<b>Task 2</b></br>";

function converter($string) {
    $string = strtoupper($string);
     for($i=0;$i<strlen($string);$i++) {
        if ($string[$i]==='A') {
            $string[$i] = 'T';
        } elseif ($string[$i]==='T') {
            $string[$i] = 'A';
        } elseif ($string[$i]==='C') {
            $string[$i]= 'G';
        } elseif ($string[$i]==='G') {
            $string[$i]= 'C';
        } else {
            continue;
        }
    }
return $string;
}

$string = "ATTGC";
$res = converter($string);
echo "{$string}=>{$res}"."</br>";

?>