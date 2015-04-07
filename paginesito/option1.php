<?php 
	include("config.php");

	$query = 'Select * From utenti Where="'.$_GET["id"].'"';
	$risultato = mysqli_query($conn, $query);
	
	if (mysqli_num_rows($risultato) > 0) {
		// output data of each row
		$row = mysqli_fetch_assoc($risultato);
		echo '<input type="text" name="nome" value="'.$row["nome"].'">';
		echo '<input type="text" name="nomeUtente" value="'.$row["nomeUtente"].'">';
		echo '<input type="text" name="pass" />';
	}
	
	mysqli_close($conn);
?>