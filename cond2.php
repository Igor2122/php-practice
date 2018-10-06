<?php 

#CONDITIONALS 
    // == VALUE 
    // === VALUE & DATA TYPE 
    // != EQUALS RO 
    // !== NOT IDENTICAL 
    

// $num = 5;

// if($num == 5) {
//     echo '5 passed';
// } elseif($num == 6) {
//     echo '6 passed';
// } else {
//     echo 'did not pass';
// }


#NESTING IF STATEMENTS 

// $num = 5; 

// if ($num > 4){
//     if($num < 10) {
//         // echo 'num passed';
//     }
// }

# LIGICAL OPERATORS 
/* && AND 
    || OR 
*/

// $num = 4;

// switch($num){
//     case 4:
//         echo 'wrong';
//         break;
//     case 5: 
//         echo 'correct';
//         break;
// }

$colors =  array(
    'red',
    'pink',
    'orange',
    'burgundy',
    );
    
    
    $value = 0;
        
    
    switch($colors) {
        case 'red':
            echo 'its red!';
            break;
        case 'pink':
            echo 'its pink';
            break;
        case 'orange':
            echo 'it\'s orange';
        case 'burgundy':
            echo 'it\'s burgundy';
    }







