<?php

//Task 1. Find an index N where the sum of the integers to the left of N is equal to the sum of the integers to the right of N.
echo "<b>Task 1</b></br>";

function indexOfEqualSum($array){ 
    $index = -1;
    $length = count($array);
    $left = [$array[0]];
    
    $right = array_slice($array,2);
    $sumLeft = $array[0];
    $sumRight = array_sum($right);
     for ($i=1;$i<$length;$i++) {           
            if ($sumLeft===$sumRight) {
                $index = $i++;
                return $index;
            } else {
                array_push($left, $array[$i]);
                $right = array_slice($right,1);
                $sumLeft = array_sum($left);
                $sumRight = array_sum($right);
            }
         }
    return $index;
 }

$array = [10,-80,10,10,15,35] ;
print_r($array);
$res = indexOfEqualSum($array);
echo "</br>Index of element where the sum to the left is equal to the sum of the right is {$res}.";

//Task 2. Find out a unique value in array
echo "<b></br></br>Task 2</b></br>";

function unique($arr)
{
    sort($arr);
    $length=count($arr);
    if ($arr[0]!= $arr[1]) {          
        return $arr[0];
    } elseif ($arr[$length-2]!=$arr[$length-1]) { //check out if first or last elements are unique 
        return $arr[$length-1];
    } else {//check out if the rest of elements are uniques
        $k=0;
        for ($i=1; $i<$length-1; $i++) {
            
            if($arr[$k]!= $arr[$i]){
                $k=$i;
                $i=$k+1;
                if($arr[$k]!= $arr[$i]){               
                    return $arr[$k];
                } else {               
                    continue;
                }
           
            } else {                
                continue;
            } 
        }
    }
}

$arr = [7,3,5,3,4,4,1,5,7];
$result= unique($arr);
print_r($arr);
echo "</br>Unique value of this array is {$result}.";

?>