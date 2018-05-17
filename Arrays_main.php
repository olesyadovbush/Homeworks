<?php

//Task 1. Є масив з довільними числами. Зробіть так, щоб елемент повторився в масиві
//таку кількість разів, яка відповідає його числу. Приклад: [1, 3, 2, 4] 
//перетворюється в [1, 3, 3, 3, 2, 2, 4, 4, 4, 4].
    
echo "<b>"."Task 1"."<b></br>";

function repeatElements($array) {
    
    $newArray=[];
     for ($i=0;$i<count($array);$i++) {
        $count = 0;
        while ($count!=$array[$i]) {
            array_push($newArray, $array[$i]);
            $count++;
        }
    }return $newArray;
}

$array = [1, 3, 2, 4];
print_r($array);
$res = repeatElements($array);
print_r($res);

//Task 2. Є масив: 
//$temperatures = array(33, 15, 17, 20, 23, 23, 28, 40, 
//21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);
//Знайти три найменших значення, три найбільших і три середніх.

echo "</br></br><b>Task 2<b></br>";

function minMaxMiddle3Values($array) {
        
    $newArray=[];
    $length = count($array);
    $middle = (int)($length/2);
    
    sort($array);
    array_push($newArray,$array[0],$array[1],$array[2],
                   $array[$length-1],$array[$length-2],$array[$length-3],
                   $array[$middle-2],$array[$middle-1],$array[$middle]);
    return $newArray;
}

$array = array(33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 
               18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28);

$res = minMaxMiddle3Values($array);
print_r($res);

//Task 3. Отримати масив відсортований за ціною книжок 
//Отримати відфільтрований масив книжок у яких є тег ‘php’

echo "</br></br><b>Task 3<b></br>";

$books = [
    [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
    ],
    [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
    ],
    [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
    ],
    [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
    ],
    [
        'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jquery']
    ],
    [
        'name' => 'Miss Peregrine\'s Home for Peculiar Children',
        'author' => 'Ransom Riggs',
        'price' => 8.18
    ]
];

usort ($books, function($a, $b) {
    return ($a['price'] - $b['price']);
});
print_r($books);
echo "</br></br>";

/*$filtered = array_filter($books, function($value){
    return in_array('php',$value['tags']);
  });
print_r($filtered);
echo "</br></br>";

print_r($result);
*/
?>