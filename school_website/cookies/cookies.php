<?php 

// SERIALIZE() - convert complex strugcture to string and vice-versa 

setcookie('name', 'john');

$user = [
    'name'=> 'John',
    'login'=> 'root',
    'password' => '1234',
    ];
    
$str = serialize($user);

// open 



// echo $str;

echo "<br>";
echo "<br>";
echo "<br>";

// 2nd option that is more cross paltform: B64 

// echo base64_encode($str); // on a way out: YTozOntzOjQ6Im5hbWUiO3M6

// Lab 

$visitCounter = 0;
    if(isset($_COOKIE["visitCounter"])){
        $visitCounter = $_COOKIE["visitCounter"];
        $visitCounter++;
    }
$lastVisit = '';
if(isset($_COOKIE["lastVisit"])){
        $lastVisit = date("d-m-Y H-i-s", $_COOKIE["lastVisit"]);
    }

setcookie("visitCounter", $visitCounter, 0x7FFFFFFF);
setcookie("lastVisit", time(), 0x7FFFFFFF);
