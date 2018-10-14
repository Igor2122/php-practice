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

unserialize($user);

echo $str;
