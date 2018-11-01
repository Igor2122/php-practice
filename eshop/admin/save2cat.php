<?php
	// подключение библиотек
	require "secure/session.inc.php";
	require "../inc/lib.inc.php";
	require "../inc/config.inc.php"; 
	include_once 'add2cat.php';
	
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$title = $_REQUEST['title']; 
		$author = $_REQUEST['author']; 
		$pubyear = $_REQUEST['pubyear']; 
		$price = $_REQUEST['price']; 
		
		
		
		echo gettype($stmt);
	
	if(!addItemToCatalog($title, $author, $pubyear, $price)){ 
			echo 'Произошла ошибка при добавлении товара в каталог'; 
		}else{ 
			header("Location: add2cat.php"); 
			exit; 
		}

	}