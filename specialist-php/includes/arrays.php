<?php 

// Arrays

$arr1 = array();// this is the older version 

$arr = []; // this syntax was intr with php 5.4 

/*
    if($argv){ // empty array is false by default 
        echo 'hello';
    } else {
        echo 'i am empty';
    }
*/

//$arr = ['igor', 'john', 'mark', '1234'];
$arr = [ // php let's us name the elements and adress them not only by # like on js ASSOCIATIVE ARRAY in js it's object
    'name' => 'igor', 
    'login' => 'john', 
    'pass' =>  '1235',
    ];



echo $arr[0];
//echo count($arr); // count length of the array
$arr['age'] = 25;// to add element and will puth 1+ to to the last element of the array
$arr[] = true;// if we did not specify the name it will automatically be 0

//print_r($arr);// will print the content of the array for us will not provide the type of the elements inside the array & we can't see the total # of elements inside
// var_dump($arr);


// foreach($arr as $li){
//     echo $li . '<br>';
// }

echo '<br>';
echo '<br>';

// echo is_array($arr);


