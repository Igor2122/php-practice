<?php 

// 
session_start();

$_SESSION["name"] = "john";

// echo $_SESSION["name"];

session_destroy();

