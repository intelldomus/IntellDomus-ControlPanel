<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "IntellDomusDB";
	
	$conn = mysqli_connect($host, $username, $passwd, $dbname) or die("Problemi di connessione"); //-- MySQL DB Connect
	//$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.accdb)}; DBQ=$dbName; Uid=; Pwd=;");
?>