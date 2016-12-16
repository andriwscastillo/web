<?php
	$servidor="localhost";
	$user="root";
	$pass="";
	$db="db_codearting";
	mysql_connect($servidor,$user,$pass)
	or die ("Error con el Servidor de la Base de Datos");
	
	mysql_select_db($db) or die
	("No se ha encontrado la Base de Datos");
?>