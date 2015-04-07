<?php
	//include("head.php");

	switch($_GET["id"]) {
		case 0: 
			include("paginesito/home.html");
			break;
		case 1: 
			include("paginesito/led.html");
			break;
		case 3:
			include("paginesito/login.html");
			break;
		case 4:
			include("paginesito/sorveglianza.html");
			break;	
		case 5:
			include("paginesito/smabell.html");
			break;
		case 6:
			include("paginesito/option.php");
			break;
	}		
	
	//Sinclude("foot.html");
 ?>