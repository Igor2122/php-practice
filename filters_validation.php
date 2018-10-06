
<?php 



    // CHEECK if any data was submitted in the imput section
/*
    if(filter_has_var(INPUT_POST, 'data')) {
        echo 'data found';
    } else {
        echo 'data not found';
    }

    
    if(filter_has_var(INPUT_POST, 'data')) {
        // remove any charachters that do not belong in the email adress 
        $email = $_POST['data']; // here we take the data in the post (inputed)
        
        // here we filter the charachters of an email 
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email . '<br>'; 
        
        
    
        
        if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
            echo 'inputd email: ' . $email . ' - is valid';
        } else {
            echo 'inputd email: ' . $email . ' - is not valid';
        }
    } 
    
    
// list of validations we can test 

		#FILTER_VALIDATE_BOOLEAN
		#FILTER_VALIDATE_EMAIL		
		#FILTER_VALIDATE_FLOAT		
		#FILTER_VALIDATE_INT			
		#FILTER_VALIDATE_IP			
		#FILTER_VALIDATE_REGEXP		
		#FILTER_VALIDATE_URL

		#FILTER_SANITIZE_EMAIL	
		#FILTER_SANITIZE_ENCODED	
		#FILTER_SANITIZE_NUMBER_FLOAT	
		#FILTER_SANITIZE_NUMBER_INT	
		#FILTER_SANITIZE_SPECIAL_CHARS	 
		#FILTER_SANITIZE_STRING		
		#FILTER_SANITIZE_URL
      

     
     // check if the input is a number
     
    $var = ;
    if(filter_var($var, FILTER_VALIDATE_INT)) {
        echo $var . 'is a number';
    } else {
        echo $var . 'is not a number';
    }
    


    // filter letters from numbers 
    $number = fsdf4549n48498594r;
    //var_dump( filter_var($number, FILTER_SANITIZE_NUMBER_INT));
    
    // filter harmfull script like js scripts etc
    $harm_script = '<script>alert1</script>';
    //echo filter_var($harm_script, FILTER_SANITIZE_SPECIAL_CHARS);
    //echo $harm_script;



    // FILTER INPUT ARRAY 
    
    $filters = [
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
                "filter" => FILTER_VALIDATE_INT,
                "options" => array(
                        "min_range" => 1,
                        "max_range" => 100,
                    ),
            ),
        ];

    print_r(filter_input_array(INPUT_POST, $filters));
    
 */   
    
    
    //FILTER VAR ARRAY
     
    $arr = [
        "name" => 'igor', 
        "age" => 35, 
        "email" => 'igor_pavlenko@yahoo.com',
        ];
        
    // here we will take each of the above and apply the filters that we want
        
    $filters = [
        "name" => array(
            "filter" => FILTER_CALLBACK, // this will allow to apply the function 
            "options" => "ucwords",
            ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 40,
                ),
            ),
        "email" => FILTER_VALIDATE_EMAIL,
        ];
     
    print_r(filter_var_array($arr, $filters)); // we pass in the array and the filters we created for this 
     
     
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data"/>
    <input type="text" name="data2"/>
    <input type="text" name="data3"/>
    <input type="submit" value="Submit"/>
</form>