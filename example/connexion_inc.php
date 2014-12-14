<?php


$mysqli = @new Mysqli("localhost","root", "","membre");

if($mysqli->connect_error)
	{
		die("Un prob de connexion à la BDD:" . $mysqli->connect_error);
	}