<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="refresh" content=""> 
		<title>Chargement...</title>
		<style type="text/css">
			.load{
				margin: 0 auto;
				position: absolute;
    			top: 50%;
    			left: 50%;
    			margin-right: -50%;
    			transform: translate(-50%, -50%) 
			}
		</style>
	</head>
	<body>
		<p class="load"><img src="chargement.gif"></p>
		<p >Veuillez ne pas recharger</p>
	</body>
</html>

<?php
	if (!empty($_GET['page'])) {
		$d = $_GET['page'];
		$lien = "Refresh: 3; URL=";
		$lien .= $d;
		header($lien);
	}else{
		header("location:connexion.php");
	}
	
?>