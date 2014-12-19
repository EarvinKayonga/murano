<ul class="nav">

<li class="navel1"  ><p ><img src="thumb.png" alt="Murano" height="80" width="120"></p></li>
<?php
	if (utilisateur_est_connecte()) {
		?>
			<li class="navel" role="presentation" class="active"><a href="deconnexion.php">Deconnexion</a></li>
			<li class="navel" role="presentation" class="active"><a href="profil.php">Profil</a></li>
			
		<?php
	}else{
		?>
			
 			<li class="navel"  role="presentation"><a href="connexion.php">Connexion</a></li>
		<?php
		}

?>
<li class="clear"></li>
</ul>
