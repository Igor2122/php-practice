<?php 

$phrase = 'We only hit what we aim for';
//$strlength = strlen($phrase) . "\n";

if($strlength > 0) {
    echo "horray we now know the string length, which is $strlength charchters long \n";
    // STRING POSITION strpos
    echo strpos("horray we now know the string length, which is $strlength charchters long", 'we'. "\n"); // will return the charachter count b4 the 'we' string
    // SUBSTRING substr
    echo  substr("horray we now know the string length, which is $strlength charchters long", 7 ."\n"); // will return the txt afer the 7th letter in the string 
}




$start = strpos($phrase, 'hit') . "\n";
//echo substr($phrase, $start) ."\n"; // here we start @ 0 and will go up to 5 position


// ARRAY FUNCTIONS 

// array_keys()

$names = array(
    'Mike' => 'Frog',
    'Chris' => 'Teacher',
    'Archie' => 'Teacher',
    );
    
    
// foreach(array_keys($names) as $name) { // will return the values of arr keys
//     echo "Hello, $name" . "\n";
// }




// array_walk()

function print_info ($value, $key) {
    echo "$key  is a $value \n";
}
    
array_walk($names, 'print_info'); // here we call a func print_infor with a string;
    
?>