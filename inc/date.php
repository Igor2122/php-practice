<?php 
date_default_timezone_set ( 'Europe/Prague' );
$day = date('l');

$time = date('G');

$greeting;

if ($time > 7 && $time <= 12 ) {
	$greeting = 'Доброе утро';
} elseif ($time > 12 && $time <= 18) {
	$greeting = 'Добрый день';
} elseif ($time > 18 && $time <= 7) {		
	$greeting = 'Добрый вечер';
} else {
	$greeting = 'Доброй ночи';
}
