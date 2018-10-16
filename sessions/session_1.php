<?php 

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = strip_tags($_POST["name"]);
    $age = $_POST["age"] * 1;
    
    $_SESSION["name"] = $name;
    $_SESSION["age"] = $age;
    
    echo $name, $age;
} else {
    $name = $_SESSION["name"];
    $age = $_SESSION["age"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="name" action="session_1.php" method="post"/>
        <input type="number" name="age"/>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>



