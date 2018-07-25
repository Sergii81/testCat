<?php
	ini_set('display_errors', '1');
	Error_Reporting(E_ALL & ~E_NOTICE);

	include 'Animal.php';
	include 'Cat.php';	
	
	$cat = new Cat("Garfild");
	
	echo $cat->getName();
	echo "<br>";

	echo $cat->meow();

?>