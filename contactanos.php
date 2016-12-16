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
              <h3>Validando Formulario</h3>
              <div> 
               <?php
                  /*Validad si se ha enviado el Formulario*/
                    if($_POST)
                    {

                      $nombreC=$_POST['txtUsuario'];
                      $telefonoC=$_POST['txtTelefono'];
                      $telefonoO=$_POST['txtOtroTelefono'];
                      $direccionC=$_POST['txtDireccion'];
                      $parrafoC=$_POST['txtOtroContacto'];
                      $emailC=$_POST['txtEmail'];

                      /*Validando campos vacios*/
                      if(empty($nombreC)){
                        echo "Favor debe escribir su usuario <br>";
                      }

                      if(empty($telefonoC)){
                        echo "Favor debe escribir su teléfono <br>";
                      }

                      if(empty($telefonoO)){
                        echo "Favor debe escribir su otro contacto <br>";
                      }
                      
                      if(empty($direccionC)){
                        echo "Favor debe escribir su direccion <br>";
                      }

                      if(empty($parrafoC)){
                        echo "Favor debe escribir su mensaje aquí <br>";
                      }
                      
                      if(empty($emailC)){
                        echo "Favor debe escribir su Email <br>";
                      }

                  
                      /*Validar que todos los campos esten llenos*/
                      if( (!empty($nombreC)) && (!empty($telefonoC)) && (!empty($telefonoO)) && (!empty($direccionC)) 
                        && (!empty($parrafoC)) && (!empty($emailC)) ){

                        /*Incluimos el archivo de conexion*/
                        include("motor/cls_conexion.php");

                        if (mysql_query($Insertar))
                        {
                          echo"<h4>Cliente registrado correctamente<h4>";
                        }else
                        {
                          echo"Ha fallado el registro del Cliente <br>";
                        }

                      }else{
                        echo "Faltan campos por llenar";
                      }

                    }
                  ?> 
              </div>
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