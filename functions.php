<?php 

function hello($arr, $tagline='how are you?') {
    if(is_array($arr)){
        foreach($arr as $name) {
            echo "hello, $name! $tagline \n";
        }
    } else {
        echo 'hello friends';
    }
}
 
 $names = array(
     'Igor',
     'Reem', 
     'Archie',
     );
     


    function geti_nfo($name, $title=null) { 
        if($title){
            echo "$name has arrived he is with us as a $title \n";
        } else {
            echo "$name , has arrived wllcome";
        }
    }
    
    //geti_nfo('igor', 'friend');
    
    function hellowski($name='Mike') {
        if($name == 'Mike'){
            return 'Hello Mike';
        } else {
            return 'Hello stranger';
        }
        
    }
    
    
    //$greeting = hellowski('Archie');
    
    //echo $greeting;
    
    function add_up($a, $b) {
        $arr = array (
            $a ."\n",
            $b."\n",
            $a + $b."\n",
            );
        return  $arr;
        }
    
    
    //$value = add_up(3, 4);
    
    //print_r($value); // will print the array with indexes
    
    // foreach($value as $i){
    //     echo $i;
    // }
    
    
    function greet ($name) {
        echo "$name, hello";
    }
    
    $func = 'greet';
    //$func('Igor'); // here we call func with our own provided value;
    
    
    
    function answer () {
        return 42;
    }
    
    function subtract($a, $b) {
        return $a - $b;
    }
    
    $fun = 'subtract';
    
    $num = $fun(5, 10); // we created a new var and called fun() as it's value
    
    //echo $num;
    
    
    
    
    
    
    
    
    // $greeting = array(
    //     hellowski(),
    //     );
        
    
    // foreach ($greeting as $value) {
    //     echo $value . "\n";
    // }
    
    
    
    
    






$current_user = "Mike";

function isMike() {
    global $current_user;
    if($current_user == 'Mike') {
        echo 'Hello Mike';
    } else {
        echo "who are you ?";
    }
}




// CLOSURE FUNCTIONS 

$greetig = function () use($s) { // $names was defined outside the function and we used it here 
    echo "Hello there, $s \n";
};

//$greetig('Mike');

//echo strlen( 'igorio');


//  Traversey Media prictice 


#substr -- Returns a portion of a string 
    $output = substr('Hello', 3);
    
    //echo $output;
    
    $string = strlen('hello world');
    
    //echo $string;
    
    
    // can use this for a form to remove the white space they added
    $text = 'Hello World                    ';
    $trimmed = trim($text);
    var_dump($trimmed);
    
    $output = 'i am igor from ukraine';
    
    //echo ucwords($output);
    
    // str_replace 
    
    $text = 'hello world';
    $output = str_ireplace('World', 'Everyome', $text);
    
    //echo $output ."\n";
        
    $val = 22;
    
    $output = is_string($val);
    echo $output;
    
    $array = [
        'a',4,true,false,33.5,'33.5',23,'23'
        ];
        
    if(isset($array)){
        echo 'values are set' ."\n";
    foreach($array as $value){
            if(is_string($value)){
                echo $value . '-is a string' . "\n";
            }
    }
        } else {
            echo 'please set the values so we can move on' . "\n";
        }
        
        
     // gz compress -- will compress the string 
     
     $string = 'd scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cd scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cd scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cd scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cd scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets cd scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets c';
     $compressed = gzcompress($string);
     
     echo $compressed . '<br>';
     
     $original = gzuncompress($compressed);
     
     echo $original . '<br>';
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     





















?>