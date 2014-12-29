<?php
require_once("init_inc.php");
if (!utilisateur_est_connecte()) {
	header("location:connexion.php");
	die();
}
ipregister(get_client_ip());
require_once("haut_de_site.php");


?>
<p class="affair">Hello <?php echo $_SESSION['utilisateur']['pseudo']; ?></p>
<div class="container">


	<div id="secu" >
		
		<br/>
		<p class="b">Prenom: <?php echo $_SESSION['utilisateur']['prenom']; ?></p>
		<p class="b">Nom: <?php echo $_SESSION['utilisateur']['Nom']; ?></p>
		<p class="b">Email: <?php echo $_SESSION['utilisateur']['email']; ?></p> 
		<?php
		$id_utilisateur =$_SESSION['utilisateur']['id_utilisateur'];
		$mail = $_SESSION['utilisateur']['email'];
		// Changement de Mot de passe
		$do = '<p class="b">'; 
		$do .= '<a href=mdp.php?id_utilisateur=' . $id_utilisateur;
		$do .= '&email='.$mail;
		$do .= ">Changer de mot de passe</a></p>";
		
		echo $do;
		//-----------------------------------
		// Modifications de vos infos
		$d = '<p class="b">'; 
		$d .= '<a href=modification.php?id_utilisateur=' . $id_utilisateur;
		
		$d .= ">Modifier vos infos</a></p>";
		
		echo $d;

		//---------------------------------



		?>
		<p class="b">Adresse IP actuelle: <?php echo get_client_ip(); ?></p>
		<p class="b">Les précédentes adresses IP : <br/><?php echo displayip($id_utilisateur); ?></p>		

		
	</div>
</div>



<?php
require_once("footer.php");
?>
