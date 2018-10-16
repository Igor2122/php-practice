<?php 
    // 302, 301 - 
        // 302 - temporary moved resource 
        
        // header("Location: http://github.com");
    
    
    
    

?>

<form action="test.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
<input type="submit">

    <?php 
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = strip_tags($_POST["name"]);
        $age = $_POST["email"];
        
        setcookie('username', $name);
        setcookie('age', $age);
        
        header("Location:" . $_SERVER["PHP_SELF"]);
        exit;
        var_dump($name);
    }
    
        echo $name . ' ' . $age;
        echo $_COOKIE["username"];
        echo $_COOKIE["age"];
        
        