<?php 
	session_start();
	
	if($_SESSION["nome"] != "") {
		session_unset();
		session_destroy();	
	}
	
	//Redirect to home
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
?>