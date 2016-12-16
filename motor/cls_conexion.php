<?php
					/*Datos de conexion a servidor*/
					$Servidor="localhost";
					$User="root";
					$Pass="";
					$DB="db_codearting";

					/*Conexion al servidor*/
					mysql_connect($Servidor,$User,$Pass) or die ("Ha fallado la conexion al servidor");
					mysql_select_db($DB) or die ("No se ha encontrado la base de datos");
					$Insertar="
						insert into tbl_contacto (NombreC, DireccionC, EmailC, TelefonoC, TelefonoO, Parrafo)
						values
						('$nombreC', '$telefonoC', '$telefonoO', '$direccionC', '$parrafoC', '$emailC' )
						
					";

?>