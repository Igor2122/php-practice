<?php 

// Hashing MD5 and SHA1
// echo md5("password") . "<br>";



// manual hashing 
/*
echo md5("Reem"). "<br>";
echo sha1("Reem");
*/
// php function crypt

echo crypt("password"); // this is also not the best practice 

// fro php 5.5 we have a funciton password hash 

$hash = password_hash("password", PASSWORD_BCRYPT);

echo $hash;

$pass = "password";

if(password_verify($pass, $hash)){
    echo "<br>" . "password passed";
}

