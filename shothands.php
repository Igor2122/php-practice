<?php

    // $logged_in = 'archie';
    
    /*
    if($logged_in) {
        echo 'you are logged in';
    } else {
        echo 'you are not logged in';
    }
    
    */

    // shorthand option 
        // after ? we input our both statement both for true and false 
    
    
    /*
    echo (is_string($logged_in) && strtolower($logged_in) == 'igor') ? 'you are logged in' : 'you are not logged in';
    
    echo $is_registered = ($logged_in) ? true : false;
    
    
    
    echo ($is_registered > 0) ? 'you worked it out!! ' : ' you still nedd to take a look at eh docs' ;
    */
    
    /* $is_registered = ($logged_in) ? true : false;
    
    //echo $is_registered;
    
    $age = 20;
    $score = 5;
    
    echo 'Your score is:' . 
    ($score > 10  ? ($age > 10 ? 'Avarage' : 'Exceptional' ) : ($age > 10 ? 'Horrible' :  'Avarage' ));  \
    
 
    */
    
$logged_in = false;
$arr = [
    1,2,3,4,5,6,7,8,
    ];
?>

<!--     EXAMPLE OF IF SHORTHAND WITH HTML TAGS  -->
<div>
    <?php if($logged_in) { ?>
        <h1>Hello User</h1>
    <?php } else {?>
        <h1>Wellcome Guest</h1>
    <?php } ?>
</div>

<!--     OPTION 2 ---- EXAMPLE OF IF SHORTHAND WITH HTML TAGS   -->    

<div>
    <?php if($logged_in): ?>
        <h1>another log in </h1>
    <?php else: ?>
        <h1>another user log in fail</h1>
    <?php endif ?>
</div>

<!-- EXAMPLE OF FOREACH LOOP   the same method with the for loops    -->

<div>
    <?php foreach ($arr as $value): ?>
        <h1><?php echo $value ?></h1>
    <?php endforeach ?>
        
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

