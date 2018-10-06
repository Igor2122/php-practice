<?php 

    $learn = array('Conditionals', 'Arrays', 'Loops');
    array_push($learn, 'Build something awesome', 'today');
    array_unshift($learn, 'I want to');
    echo "i like $learn[0]";
    
    sort($learn);
    
    //echo 'you removed '. array_shift($learn) . "\n";
    //echo 'you popped/removed ' . array_pop($learn) . "\n";
    //echo implode("\n", $learn);
    //echo 'we removed' . unset($learn[0], $learn[2]) . 'from our array' . "\n";
    unset($learn[0], $learn[2]); // here we reset the array keys 
    $learn = array_values($learn) ;
    
    $learn[0] = 'email'; // here we will updated the value of the key 0
    
    
    
    var_dump($learn);
?>