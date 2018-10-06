<?php 

    
    
    
    // for($current_year = date('Y'),$year = $current_year - 100;$year <= $current_year; $year++) {
    //     echo $year . "<br />\n";
    // }
    
    /*while(++$year <= $current_year){ // ++$year -- will increment by 1 each time the loops runs
        echo $year . "<br />\n";
    }*/
    
    /*(do { // will atleast run once.  
        echo $year . "\n";
    } while (++$year <= $current_year);
    */
    
    // $learn = array('Conditionals', 'Arrays', 'Loops');
    // array_push($learn, 'Build something awesome', 'today');
    // array_unshift($learn, 'I want to');
    // echo "i like $learn[0]";
    
    // asort($learn);
    
    // $count = 0;
    // while (list($key, $val) = each($learn) && $count++ < 2) {
    // echo "$key => $val\n";
//}


$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");


// for($i = 0; $i < count($foo); $i++){
//     echo $foo[$i] . "\n}";
// }
    //var_dump($learn);


$facts = array(
    57 => ' on Heinz ketchup bottles represents the number of varieties of pickles the company once had.',
    2 => ' is the approximate hours a day Giraffes sleeps',
    18 => ' is the average hours a Python sleeps per day',
    10 => ' per cent of the world is left-handed.',
    11 => ' Empire State Buildings, stacked one on top of the other, would be required to measure the Gulf of Mexico at its deepest point.',
    98 => '% of the atoms in your body are replaced every year',
    69 => ' is the largest number of recorded children born to one woman',
);

for ($i = 2; $i < 99; $i++) {
  if(isset($facts)){
      echo "$facts[$i]" ;
  }
}
    
    
    
    
    
    
    
    
    

?> 