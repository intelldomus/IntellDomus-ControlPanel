<button onClick="prova()">Prova Notifiche</button>
<fieldset>
	<legend>Utenti</legend>
	<form>
		<select name="utenti">
			<?php 
				include("config.php");
				
				$query = 'Select * From utenti';
				$risultato = mysqli_query($conn, $query);
				
				if (mysqli_num_rows($risultato) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($risultato))
						echo '<option value="'.$row["id"].'">'.$row["nome"].'</option>';
				}
				
				mysqli_close($conn);
			?>
		</select>
		<input onClick="loadUser()" type="submit" value="scegli"/>
	</form>
	<div id="user" ></div>
</fieldset>
 
