<?php 

// echo 1 == '1'; // = true
// echo 1 == 1; // = true

// echo 1 === '1'; // = false
// echo 1 === 1; // = true

// $shop = 'open';

// //echo isset($shop); // retuns true false-is only when the var does not excist or when we assigned NULL to it   


// if($shop != "closed") 
// {
//     echo "will go to the shop\n" . '<br>';
//     echo "will buy bread\n" . '<br>';
// }

// echo 'will go home';


//echo isset($shop); // retuns true false-is only when the var does not excist or when we assigned NULL to it   
/*
$shop = true;
$money = false;

if($shop xor $money) // to check if either left or right is true as normally checks from left to right
{
    echo "will go to the shop\n" . '<br>';
    echo "will buy bread\n" . '<br>';
} else {
    echo 'will go home';
}

// Terinary operator in 1 line 

echo ($shop) ? 'Go to kiosk' : 'Go to the market';
*/


setlocale(LC_ALL, "russian");
$time = (int)strftime('%H');
$day = (int)strftime('%l');
echo $day; 
$welcome = '';


if($time > 6 && $time < 12) :
    $welcome = "Good Morning";
 elseif($time > 12 && $time < 18) :
    $welcome = "Good Day";
 elseif($time > 18 && $time < 23) :
    $welcome = "Good Evening";
 else :
    $welcome = "Good Day";
endif;

$size = ini_get("post_max_size");
$letter = $size{strlen($size)-1};
$size = (int)$size;// here we are sure that we will have a digit here with the duck logic

switch(strtoupper($letter)){
    case "G": $size *= 1024;
    case "M": $size *= 1024;
    case "k": $size *= 1024;
}

echo $size;





