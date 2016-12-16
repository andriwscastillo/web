<?php
	session_start();
	@session_regenerate_id();
	$_SESSION['Usuario']=$_GET['vUser'];
	$_SESSION['Nombre']=$_GET['vNombre'];
	$_SESSION['Foto']=$_GET['vFoto'];
	@session_write_close();
	/*Redireccionamos el usuario a una 
	pagina deseada*/
	echo"<script>location.href='home.php';</script>";
	
?>