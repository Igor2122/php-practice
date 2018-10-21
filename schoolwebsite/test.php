<?php 

// include_once 'cookies/cookies.php'; 
// include_once 'headers/headers.php'; 
// include_once 'headers/content-disposition.php'; 
// include_once 'caching/caching.php'; 
// include_once 'hash/hash.php'; 
// include_once 'sessions/session-1.php';


// we can check what is in the folder
$dir = opendir(".");

while($name = readdir($dir)){
    if($name == '.' or $name == '..'){
        continue;
    }
    if(is_dir($name)){
        echo '[' . $name . ' - this is folder' . ']<br>';
    } else {
        echo $name . '<br>';
    }
}

closedir($dir);