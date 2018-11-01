<?php


function addItemToCatalog ($title, $author , $pubyear , $price){
    
    global $link;
    
    $sql = "INSERT INTO catalog(title, author, pubyear, price) 
    VALUES('$title', '$author', $pubyear , $price)";
    
    if (!$stmt = mysqli_prepare($link, $sql)){
        return false; 
    } else {
        mysqli_stmt_bind_param($stmt, "ssii", $title, $author, $pubyear, $price);
        mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt); 
        return true;
    }
    
}


function selectAllItems(){
    
    global $link;
    
    $sql = "SELECT id, title, author, pubyear, price FROM catalog";
    if(!$result = mysqli_query($link, $sql)){
        return false;
    } else {
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $items;
    }
}


function saveBasket (){
    global $basket; 
    
    // we serilize it in order to save it cookies and baseicode it to protect from information loosing
    $basket = base64_encode(serialize($basket)); 
    setcookie('basket', $basket, 0x7FFFFFFF); // creating cookies and setting it up for long time here 
}

function basketInint (){
    global $basket, $count;
    
    if(!isset($_COOKIE['basket'])){
        $basket = ['orderid' => uniqid()];
        saveBasket();
    } else{ 
        $basket = unserialize(base64_decode($_COOKIE['basket'])); 
        $count = count($basket) -1; 
    }
}

function add2Basket($id) {
    global $basket;
    $basket['id'] = 1;
    saveBasket();
}