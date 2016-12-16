<?php
	function registrarUsuario($nombreusuario,$clave,$nombre,$apellidos,$correo,$direccion,$foto)
	{
		include_once("conexion.php");
		//Comprobar si el Usuario(Matricula) existe
		$consulta = mysql_query('SELECT usuario FROM registro WHERE usuario="'.mysql_real_escape_string($nombreusuario).'" ');
		
		if (mysql_num_rows($consulta)>0) 
		{
			echo "El usuario <b>'{$nombreusuario}'</b> ya existe.";
			echo "<a href='registrarusuario.html'>Volver</a>";
		}else
		{
			

			/*Creamos la variable para insertar los datos*/
			$sql="
				insert into registro 
				(usuario,clave,nombre,apellido,correo,direccion,foto)
				values
				('$nombreusuario','$clave','$nombre','$apellidos','$correo','$direccion','$foto')
			";
			if(mysql_query($sql) )
			{
				echo"Usuario registrado correctamente";
			}else
			{
			
				echo"Que pena, ha fallado el registro del Usuario";
			}
		}
	}
	
	function mostrarUsuarios()
	{
		include_once("conexion.php");
		$consulta=mysql_query("
			SELECT * from registro
		");
		/*Consultamos si la consulta ha devuelto registros*/
		if(mysql_num_rows($consulta)>0)
		{
			/*Hacemos un ciclo para leer todos los registros y lo almacenamos en una variable tipo Arreglo*/
			echo"<table border='1' width='90%'>";
			echo"
				<tr>
					<th>Usuario</th><th>Nombre </th> <th class='fotoUsuario'>Foto </th>
				</tr>
			";
			while($fila=mysql_fetch_assoc($consulta))
			{
				$nombre=$fila['nombre'];
				$nombreusuario=$fila['usuario'];
				$foto="<img src='images/upload/{$fila['foto']}' class='fotoUsuario'>";
				echo"
				<tr>
					<td>$nombreusuario</td><td>$nombre </td><td>$foto</td>
				</tr>
			";
				
			}
			
			echo"</table>";
			
		}else
		{
			echo"No hay registros para mostrar";
		}

	}

	function iniciarSession($Usuario,$Pass)
	{
		$Pass=md5($Pass);
		include_once("conexion.php");
		$consultar=mysql_query("
			SELECT * FROM registro WHERE 
			usuario='$Usuario' and clave='$Pass'
		");
		if(mysql_num_rows($consultar)>0)
		{
			/*Almacenamos todos los campos de tabla
			en una variable Array(arreglo)*/
			$fila=mysql_fetch_assoc($consultar);
			/*variable --campo de la Tabla*/
			$nombreusuario	=$fila['usuario'];
			$nombre		=$fila['nombre'];
			$foto		=$fila['foto'];
			$link="iniciarSession.php?vUser=$nombreusuario&vNombre=$nombre&vFoto=$foto";
			/*Redireccionamos a la pagina que
			creara la Session*/
			echo"<script>location.href='$link';</script>";
		}else
		{
			echo"Usuario o clave incorrecta";		
		}
	}

	function validarSession()
	{
		if(isset($_SESSION['Usuario']))
		{
			//echo"Hay un usuario logeado";
		}else
		{
			echo"<script>location.href='no-session.html';</script>";		
		}
	}

	
?>