<?php 
	include("config.php");
	session_start();
	
	$query = 'Select * From utenti Where nomeLogIn ="'.$_POST["nomeUtente"].'" && passwd="'.md5($_POST["pass"]).'"';
	$risultato = mysqli_query($conn, $query) or die("Nome o password sbagliati.");
	
	if (mysqli_num_rows($risultato) > 0) {
		// output data of each row
		$row = mysqli_fetch_assoc($risultato);
		
		if($_SESSION) session_unset();
		$_SESSION["nome"] = $row["nome"];
	}
	
	
	
	mysqli_close($conn);
	
	//Redirect to home
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
?>