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