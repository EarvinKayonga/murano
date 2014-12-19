<?php


$mysqli = @new Mysqli("localhost","root", "","murano");
// serveur distant a faire

if($mysqli->connect_error)
	{
		die("Un prob de connexion à la BDD:" . $mysqli->connect_error);
	}	
