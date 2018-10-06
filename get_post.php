<?php 


/*
THIS METHOD WITH SEND THE USECURE DATA 
    // here we return the name from the form 
    if(isset($_GET['name'])){
     //$_GET['name'];
     //$_GET['email'];
     
     //print_r($_GET);
     // this will secute from the cross attacs on your server will turn the bracket tags into harmless code ex: &lt;script&gt;1&lt;/script&gt;
     echo htmlentities($_GET['name']);
    }
THIS METHOD WILL SEND A SECURE DATA; PREFFERD TO USE THIS MEHTOD; THIS IS HOT USED VERY MUCH AS IT IS A GLOVAL VARIABLE AND U CAN ACCESS BOTH POST AND GET WITH THIS SO BETTER OT STICK WITH THE ABOVE;

    if(isset($_POST['name'])){
         $name = htmlentities($_POST['name']);
         //echo $name;
        print_r($_POST);
         
    }

    
// THIRD WAY OF GETTING IS USING REQUEST 

    if(isset($_REQUEST['name'])){
         $name = htmlentities($_REQUEST['name']);
         //echo $name;
        print_r($_REQUEST);
         
    }
*/

// QEURY STRING VALUE TO ACCESS THE FORM INFO 

    //echo $_SERVER['QUERY_STRING'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
    <!-- here we declare a method and show the page where we want to submit -->
    <form method="REQUEST" action="get_post.php">
        <div>
            <label for="">Name</label><br>
            <input type="text" name="name"/>
        </div>
        <div>
            <label for="">Email</label><br>
            <input type="text" name="emeil"/>
        </div>
            <input type="submit" value="submit"/>
    </form>
</body>
</html>