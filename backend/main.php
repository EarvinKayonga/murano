<?php
	require_once("../fonction_inc.php");
	require_once("../connexion_inc.php");


	if (!empty($_POST)) {
		echo "<p> Requete: ".$_POST['requete']."</p>";
		//echo "<br>";
		echo "<p> Bdd: ".$_POST['bdd']."</p>";
		
		
		 
		

		if (!empty($_POST['requete'])&&($_POST['bdd']!="autre")) {
			echo "<br>";
			echo "Pour information, les tables de la BDD Entreprise sont :". " employes" ;
			echo "<p style=background:green;>Voici les résultats</p>";
			$resultat = execute_requete("$_POST[requete]");
			if ($resultat->num_rows) {
				$ligne = 0;
				echo "<br>";
        		
				
        		Xcute($_POST['requete']);	
        	}else{
        		echo "<h1>Pas de résultats</h1>";
        	}
        	
        		
		}else{
			echo "<h1>Pas de requête valide ou </h1>";
			echo "<h1>Base de données injoignable</h1>";
		}
	}
	
require_once("menu.php");

?>
	<div id="requete">
	<form method="post" >

		<label for="bdd">Bdd</label>
			<select id="bdd" name="bdd">
				
				<option selected value="Entreprise">tic_entreprise</option>
				<option value="Autre">autre</option>
				
			</select>


			<br /><br /><br/>


		<label for="requete">Requête</label>
			<textarea cols="100" id="requete" name="requete"rows="10" required></textarea>

		<br/><br/>	

		<input type="submit" name="submit" value="OK"/>
		<input type="reset" name="efface" value="Recommencer" />


	</form>	
	</div>

	<?php
		echo "<hr/>";
		Xcute("select * from utilisateur");

	?>