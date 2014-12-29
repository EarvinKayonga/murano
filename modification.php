<?php
require_once("init_inc.php");


if(empty($_GET) == false){
	if (!empty($_GET['id_utilisateur'])) {
		if ($_POST) {
	$_GET['id_utilisateur']=htmlentities($_GET['id_utilisateur'],ENT_QUOTES);
	
	
	
	

	if (!empty($_POST['prenom'])) {
		$_POST['prenom']=htmlentities($_POST['prenom'],ENT_QUOTES);
		$prenom=$_POST['prenom'];
		$id_utilisateur=$_GET['id_utilisateur'];
		$req = "UPDATE utilisateur SET prenom='$prenom' WHERE id_utilisateur='$id_utilisateur' ";
		execute_requete($req);
	}
	if (!empty($_POST['nom'])) {
		$_POST['nom']=htmlentities($_POST['nom'],ENT_QUOTES);
		$nom=$_POST['nom'];
		$id_utilisateur=$_GET['id_utilisateur'];
		$req = "UPDATE utilisateur SET nom='$nom' WHERE id_utilisateur='$id_utilisateur' ";
		execute_requete($req);
	}
	header("location:loader.php?page=profil.php");
			
		
		
		
	}else{
		/*var_dump($_POST);
		var_dump($_GET);*/
		//premiere connexion
	}
}else{
		echo '<p class=b>Page Modification: Erreur avec votre pseudo</p>';
		exit;
}

}
require_once("haut_de_site.php");
echo $msg;


?>

<form class="secretm" method="post"  >
	<br>
	
	<label for="prenom"></label>
		<input id="prenom" placeholder="Prénom" type="text" name="prenom" /><br/>
	<br>
	<label for="nom"></label>
		<input id="nom" placeholder="Nom" type="text" name="nom" /><br/>
	<br>

	<button type="submit" class="btn btn-primary">Valider</button> 
</form>

</body>
</html>