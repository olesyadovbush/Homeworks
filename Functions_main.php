<?php 
//Task 1. Перетворити рядок 'var_test_text' в 'varTestText'.
echo "<b>"."Task 1"."</b></br>";

$string = 'var_test_text';
echo "{$string}"."</br>";

    function editString ($string) {
        
        $string = explode("_",$string);
        $string[1] = ucfirst($string[1]);
        
        $string[2] = ucfirst($string[2]);
        $string = implode("",$string);
            
        return $string;
    }

$res = editString($string);
echo "{$res}</br></br>";

//Task 2. Є рядок наступного вигляду: 4 літери, потім пробіл, потім ще 4 літери. Наприклад, такий рядок 'ФЫВА олдж'. Треба перетворити на наступний рядок 'АВЫФ ждло'. !!!! UTF-8
echo "<b>"."Task 2"."</b></br>";

$string = 'ФЫВА олдж';
echo "{$string}"."</br>";

    function utf8_strrev ($str) {
        
        preg_match_all('/./us', $str, $ar);
        return join('',array_reverse($ar[0]));
    }

    function reverse ($string) {
        
        $string = explode(" ",$string);
        $string[0] = utf8_strrev($string[0]);
        $string[1] = utf8_strrev($string[1]);
        $string = implode(" ",$string);
        
        return $string;
    }

$res = reverse($string);
echo "{$res}</br></br>";

//Task 3. Є масив $a = [342, 55, 33, 123, 66, 63, 9]; - потрібно вивести на екран тільки ті числа в яких є '3'
echo "<b>"."Task 3"."</b></br>";

$a = [342, 55, 33, 123, 66, 63, 9];
$a = implode(" ", $a);
echo "{$a}</br>";

$regex = "/\d*(3)+\d*/";
$matches= array();

if (preg_match_all($regex,$a,$matches)) {
    print_r($matches);
}

//Task 4. Є масив $a = [342, 55, 33, 123, 66, 63, 9]; - треба порахувати – скільки всього трійок зустрічається в масиві
echo "<b></br></br>"."Task 4"."</b></br>";

$a = [342, 55, 33, 123, 66, 63, 9];
$test = implode("",$a);

echo "$test";
$sum = 0;
 for ( $i=0;$i<=strlen($test);$i++ ) {
    if( $test[$i]==='3' ) {
        $sum++;
    }
}
echo "This array has {$sum} numbers of 3."."</br></br>";

?>