<!DOCTYPE html>
<html language="es">
<meta charset="UTF-8">
<head>
<title>ArtCodin></title>
  <link rel="shortcut icon" href="images/favicon.ico">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<!--Linkeo a CSSs-->
  <link rel="stylesheet" type="text/css" href="css_tyles/estilo.css">
  <link rel="stylesheet" type="text/css" href="css_tyles/responsive.css">
  <link rel="stylesheet" type="text/css" href="css_tyles/elastic_grid.min.css"/>
  <link rel="stylesheet" type="text/css" href="engine0/style.css"/>

<!--Linkeo a JQuerys-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>
  <script type="text/javascript" src="js/elastic_grid.min.js"></script>
  <script type="text/javascript" src="js/codigos.js"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>

</head>
<!--Empieza Contenido General-->
<body>
<div id="pagina">
  <!--Cabecera-->
  <div id="cabeza">
    <!--Espacio menú completo-->
    <div id="menu">

      <!--Menú contenedor para el responsive-->
      <div id="menu-contenedor">

        <!--NAV Completa, incluyendo responsive-->
        <nav class="clearfix">
        <ul class="clearfix">
          <li><a href="index.html#pagina">Home</a></li>
          <li><a href="index.html#Perfil">Perfil</a></li>
          <li><a href="index.html#Formacion">Formación</a></li>
          <li><a href="index.html#Habilidades">Skills</a></li>
          <li><a href="index.html#Servicios">Servicios</a></li>
          <li><a href="index.html#Portafolio">Portafolio</a></li>
          <li><a href="index.html#Contactos">Contactos</a></li>
          <li><a href="no-session.html">Acerca De</a></li>
        </ul>
        <a href="#" id="pull">Menu</a>
        </nav>

      </div>

    </div>
  </div>

<!--Contenido de los DIV-->
<div id="contenido">
  <div id="Perfil">

        <!--Validación formulario PHP-->
        <section id="Form1">
            <?php
            if($_POST)
            {
              
              $nombreusuario=$_POST['txtNombreUsuario'];
              $clave=$_POST['txtClave'];
              
              $repetirClave=$_POST['txtRepetirClave'];
              $nombre=$_POST['txtNombre'];
              $apellidos=$_POST['txtApellidos'];
              $correo=$_POST['txtCorreo'];
              $direccion=$_POST['txtDireccion'];
              /*Revisamos si se ha enviado algun archivo(imagen) para cargar*/
              if(!empty($_FILES['txtFoto']['name'])){
                /*Si hay un archivo enviado, guardamos su nombre en una variable*/
                $foto=$_FILES['txtFoto']['name'];
                
                /*Reemplazamos los espacios en blanco por _ en el nombre del archivo*/
                $foto=str_replace(" ","_",$foto);
                /*Movemos el archivo temporal desde el directorio temporal(tmp) hasta nuestro directorio para los archivos*/
                move_uploaded_file($_FILES['txtFoto']['tmp_name'],'images/upload/'.$foto);
                chmod('images/upload/'.$foto,0644);
              }else{
                //Si el usuario no selecciono una foto la asignamos el nombre de una imagen por defecto";
                $foto="no-foto.png";
              } 
              /*Validar Campos*/
              if($clave==$repetirClave)
              {
                /*Encriptamos la clave */
                $clave=md5($clave);
                /*Incluimos archivos: conexion.php y funciones.php*/
                include_once("motor/funciones.php");
                registrarUsuario($nombreusuario,$clave,$nombre,$apellidos,$correo,$direccion,$foto);
                
              }
              $destinario="$correo";
              $mensaje="Bienvenido a ArtCodin>, disfrute de su registro a nuestra web";
              $asunto="Bienvenido";
              $mensajeEnviar="$mensaje"." "."$nombre"." "."$apellidos"." ";
              $cabeceras = 'From: 20121023@itla.edu.do' . "\r\n" .
              'Reply-To: $destinario' . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
              mail ($destinario, $asunto, $mensajeEnviar, $cabeceras);
              echo "<script>alert('Se ha registrado correctamente');window.location=('login.php'); </script>";
              }
              
             
            ?>
          </section> 
  </div>

  <!--Social media-->
  <div id="socialmedia">

    <section id="conteiner">
    <h3>Social</h3>
    <br>

    <div id="d1P">
      <a href="https://www.facebook.com/pages/ArtCodin/366350956905188"><img src="images/icons/Facebook.png" height="60" width="60" art="Facebook"></a>
      <br>
      <h4>Facebook</h4>
    </div>

    <div id="d1P">
      <a href="https://instagram.com/andriwzcastillo/"><img src="images/icons/Instagram.png" height="60" width="60" art="Instragram"></a>
      <br>
      <h4>Instagram</h4>
    </div>

    <div id="d1P">
      <a href="mailto:andriwscastillo@gmail.com"><img src="images/icons/Mail.png" height="60" width="60" art="Correo"></a>
      <br>
      <h4>Coreo Elecronico</h4>
    </div>

    </section>

  </div>
</div>

<!--Linko de JQuerys-->
<script type="text/javascript" src="js/jquerys.js"></script>
<script language="javascript" src="js/validacion.js"></script>

<!--Pie de página-->
<div id="pie">
  <p>
    <p>
      No Copyright&copy; Infringement | DHTML-C1-ITLA
    </p>
    <br>
    <a href="registrarusuario.html#Perfil">Registrate</a> | <a href="sugerencias.html#Perfil">Sugerencias</a> | <a href="contactanos.html#Perfil">Contactos</a>
  </p>
</div>

</div>
<!--Final de página-->
</body>
</html>