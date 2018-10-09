<?php

for($i = 1; $i <=50; $i+=2){
    echo $i . "\n";
};

$j = 1;

while($j < 5){
    echo $j++ . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

$word = 'Hello';

$l = 0;
$len = strlen($word);
while($l < $len){
    echo $word[$l] . "<br>";
    $l++;
}

$user = [
    'name' => 'Igor',
    'login' => 'root',
    'age' => 32,
    ];
    
    // shor foreach
foreach($user as $val){
    echo $val . "<br>";
}

    // long with keys
foreach($user as $key=>$val){
    echo $key .": ". $val . "<br>";
}

// foreach to work not with the links of the var 

$nums = [1,2,3,4,5,6];

print_r($nums);

foreach($nums as &$v){ // by addig & we tell php that we want to work with the link to the var not with the copy
    $v *= 10 ."<br>";
}

print_r($nums);
