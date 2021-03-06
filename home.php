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
<!--Comienzo de todo el contenido-->
<body>
<div id="pagina">
	<!--Cabecera-->
	<div id="cabeza">

		<!--Menu-->
		<div id="menu">
			<!--Menu Contenedor-->
			<div id="menu-contenedor">
				<!--NAV completa, incluyendo responsive-->
				<nav class="clearfix">
				<ul class="clearfix">
					<li><a href="home.php#pagina">Home</a></li>
					<li><a href="home.php#Perfil">Perfil</a></li>
					<li><a href="home.php#Formacion">Formación</a></li>
					<li><a href="home.php#Habilidades">Skills</a></li>
					<li><a href="home.php#Servicios">Servicios</a></li>
					<li><a href="home.php#Portafolio">Portafolio</a></li>
					<li><a href="home.php#Contactos">Contactos</a></li>
					<li><a href="acerca.php">Acerca De</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
				</nav>
			</div>
		</div>

	</div>

<!--Slider de WOW Slider-->
	<div id="Mislider">
		<div class="diy-slideshow">
			<div id="wowslider-container0">
				<div class="ws_images">
					<ul>
						<li><img src="data0/images/dsc_5309.jpg" alt="DSC_5309" title="DSC_5309" id="wows0_0"/></li>
						<li><img src="data0/images/dsc_6780.jpg" alt="DSC_6780" title="DSC_6780" id="wows0_1"/></li>
						<li><a href="http://wowslider.com/vi"><img src="data0/images/dsc_8899.jpg" alt="slideshow html" title="DSC_8899" id="wows0_2"/></a></li>
						<li><img src="data0/images/1167609_635890879765992_2132142458_o.jpg" alt="1167609_635890879765992_2132142458_o" title="1167609_635890879765992_2132142458_o" id="wows0_3"/></li>
					</ul>
				</div>
				<div class="ws_bullets">
					<div>
						<a href="#" title="DSC_5309"><span><img src="data0/tooltips/dsc_5309.jpg" alt="DSC_5309"/>1</span></a>
						<a href="#" title="DSC_6780"><span><img src="data0/tooltips/dsc_6780.jpg" alt="DSC_6780"/>2</span></a>
						<a href="#" title="DSC_8899"><span><img src="data0/tooltips/dsc_8899.jpg" alt="DSC_8899"/>3</span></a>
						<a href="#" title="1167609_635890879765992_2132142458_o"><span><img src="data0/tooltips/1167609_635890879765992_2132142458_o.jpg" alt="1167609_635890879765992_2132142458_o"/>4</span></a>
					</div>
				</div>
				<div class="ws_script" style="position:absolute;left:-99%">
					<a href="http://wowslider.com">image carousel</a> by WOWSlider.com v7.8
				</div>
				<div class="ws_shadow">
				</div>
			</div>
			<script type="text/javascript" src="engine0/wowslider.js"></script>
			<script type="text/javascript" src="engine0/script.js"></script>
		</div>
	</div>

<!--Inicio del contendido de los DIV-->
	<div id="contenido">

		<!--DIV Perfil-->
		<div id="Perfil">
			
			<!--Boton de cerrar sessión-->
			<div class="buttonlogin">
			    	<?php
			    		session_start();
			            echo"Bienvenido ";
			            echo"<br><a href='salir.php'>Cerrar Sesion</a>";
			        ?>
       		</div>

			<h3> Perfil</h3>
			<!--DIV container para DVs dentro de Perfil-->
			<section id="conteiner">

			<!--Iniciar Session-->
			<div id="sesiones">
				<h1><a href="login.html" class="buttonlogin">Iniciar Sesion</a></h1>
			</div>

			<!--DIV1 dentro de Perfil-->
			<div id="d1P">
				<img src="images/mia.jpg" height="100%" width="100%">
			</div>

			<!--DIV2 dentro de Perfil-->
			<div id="d2">
				<ul>
					<li>Nombre: Andriws Castillo</li>
					<br>
					<li>Nacimiento: 20 de mayo de 1994</li>
					<br>
					<li>Nacionalidad: República Dominicana</li>
					<br>
					<li>Dirección: Manzana #46 #1A Las Caobas, Santo Domingo Oeste.</li>
					<br>
					<li>Teléfono: 829-667-4294</li>
					<br>
					<li>Email: andriwscastillo@gmail.com</li>
				</ul>
			</div>

			<!--DIV3 dentro de Perfil-->
			<div id="d3">
				<h4>INFORMACIÓN PERSONAL</h4>
				<br>
				<p>
					 Excelente capacidad de investigaciones de tendencias, buen manejo del tiempo y organización. Capacidad de trabajo independiente y en equipo.<br>
					<br>
					 Joven proactivo, enfocado y curioso con objetivos claros, entre ellos contribuir al desarrollo positivo de ésta entidad. Entre mis logros, destacado estudiante graduado en Técnico Informático y Computación, y cursor en término de la carrera Multimedia en el Instituto Tecnológico De Las Américas (ITLA). Además de estudiante en desarrollo de Software en el Instituto Tecnológico Comunitario (ITSC).<br>
					<br>
					 Ser responsable y tener una educación digna son mis principales cualidades.
				</p>
				</section>
			</div>
			</section>
		</div>

		<!--Descargar DV-->
		<a href="https://mega.co.nz/#!ZIgTwLgS!0ZPvrT--wGAPamzwfgl9CAQOkr-nC82TXQdYvzrnLY8" title="Descargar CV" id="range-logo">Descargar CV</a>

		<!--DIV Formación-->
		<div id="Formacion">
			<h3>Formación</h3>
			<!--DIV conteiner para los DIVs de Formación-->
			<section id="conteiner">

			<!--DIV 1 dentro de Formación-->
			<div id="d2">
				<img src="images/icons/poli.png" height="80" width="120">
				<h1>Politécnico Madre Rafaela Ybarra</h1>
				<br>
				<div class="ano">
					2010 - 2012
				</div>
				<div class="tit">
					Técnico en Informatica
				</div>
				<div class="desc">
					<p>
						Santo Domingo - República Dominicana. Conocimientos adecuados para cualquier demanda informatica.
					</p>
				</div>
			</div>

			<!--DIV 2 dentro de Formación-->
			<div id="d2">
				<img src="images/icons/itla.png" height="80" width="120">
				<h1>Instituto Tecnológico de la Américas (ITLA)</h1>
				<br>
				<div class="ano">
					2012 - 2015
				</div>
				<div class="tit">
					Técnologo en Multimedia
				</div>
				<div class="desc">
					<p>
						La Caleta - República Dominicana. Capacitación de brindar soluciones eficaces y acertadas ante cualquier demanda audiovisual.
					</p>
				</div>
			</div>

			<!--DIV 3 dentro de Formación-->
			<div id="d3">
				<img src="images/icons/itsc.png" height="80" width="120">
				<h1>Instituto Tecnológico Comunitario (ITSC)</h1>
				<br>
				<div class="ano">
					2015 - 2016
				</div>
				<div class="tit">
					Desarollo de Software
				</div>
				<div class="desc">
					<p>
						Conocimientos tecnológicos y complementarios que me permitan gestionar de manera integral el proceso de desarrollo del software.
					</p>
				</div>
			</div>
			</section>
		</div>

		<!--DIV Habilidades-->
		<div id="Habilidades">
			<h3>Skills</h3>
			<!--DIV conteiner dentro de Habilidades-->
			<section id="conteiner">

			<!--DIV1 dentro de Habilidades-->
			<div id="d1">
				<h1>Habilidaes en uso de softwares</h1>
				<br>
				<ul class="graph">
					 Adobe Photoshop
					<li class="prog5">50%</li>
					 Adobe Ilustrator
					<li class="prog9">90%</li>
					 Adobe Dreamweaver
					<li class="prog8">80%</li>
					 Adobe Muse
					<li class="prog9">90%</li>
					 Adobe Flash
					<li class="prog8">80%</li>
					 Adobe InDesign
					<li class="prog9">90%</li>
					 Autodesk Maya
					<li class="prog3">30%</li>
					 Ableton Live
					<li class="prog3">30%</li>
				</ul>
			</div>

			<!--DIV2 dentro de Habilidades-->
			<div id="d2">
				<h1>Habilidaes en Diseño</h1>
				<br>
				<ul class="graph">
					 Web
					<li class="prog6">60%</li>
					 Identidad y Branding
					<li class="prog5">50%</li>
					 Publicitario
					<li class="prog4">40%</li>
					 Ilustración Digital
					<li class="prog2">20%</li>
					 Empaques
					<li class="prog3">30%</li>
					 Productos
					<li class="prog3">30%</li>
					 Editorial
					<li class="prog7">70%</li>
				</ul>
			</div>

			<!--DIV3 dentro de Habilidades-->
			<div id="d3">
				<h1>Habilidaes en programación</h1>
				<br>
				<ul class="graph">
					 HTML5
					<li class="prog6">60%</li>
					 CSS3
					<li class="prog5">50%</li>
					 JQuery
					<li class="prog2">20%</li>
					 JavaScript
					<li class="prog2">20%</li>
					 PHP
					<li class="prog2">20%</li>
					 Java
					<li class="prog1">10%</li>
				</ul>
			</div>
			</section>
		</div>

		<!--DIV Servicios-->
		<div id="Servicios">
			<h3>Servicios</h3>

			<!--DIV conteiner para Divs dentro de Servicios-->
			<section id="conteiner">

			<!--DIV1 de Servicios-->
			<div id="d1">
				<div>
					<img src="images/icons/HTML5.png" height="60" width="60">
				</div>
				<br>
				<h1>Programación Frontend and Backend</h1>
				<div class="desc">
					<p>
						Brindar calidad junto con mis proliferos basicos y avanzados conocimientos dentro del mundo del Frontend and Backend.
					</p>
				</div>
			</div>

			<!--DIV2 de Servicios-->
			<div id="d2">
				<img src="images/icons/CSS3.png" height="60" width="60">
				<br>
				<h1>Diseño Web</h1>
				<div class="desc">
					<p>
						Con un tecnologo en Multimedia y conocimientos intermedios de programación. Llevar al usuario un diseño agradable y funcional ya que, la forma persigue el diseño.
					</p>
				</div>
			</div>

			<!--DIV3 de Servicios-->
			<div id="d3">
				<img src="images/icons/WordPress.png" height="60" width="60">
				<br>
				<h1>CMS</h1>
				<div class="desc">
					<p>
						El uso de CMS es primordiar dentro del campo de la programación web. Brindo la experiencia y los conocimientos, desde Bootstrap hasta Joomla.
					</p>
				</div>
			</div>
			</section>
		</div>

		<!--MAPA-->
		<div id="googleMap" style="width:100%;height:380px;">
		</div>

		<!--DIV Portafolio-->
		<div id="Portafolio">
			<h3>Portafolio</h3>

			<!--Galeria JQuery para Portafolio-->
			<div id="parteuno">
				<div id="elastic_grid_demo">
				</div>
				<script type="text/javascript">
			    	$(function(){
			        $("#elastic_grid_demo").elastic_grid({
			            'showAllText' : 'All',
			            'items' :
			            [
			                {
			                    'title'         : 'Frontend and Backend con CMS',
			                    'description'   : 'Diseño, manejo de contenido y programación',
			                    'thumbnail'     : ['images/small/1.jpg', 'images/small/2.jpg'],
			                    'large'         : ['images/large/1.jpg', 'images/large/2.jpg'],
			                    'button_list'   :
			                    [
			                        { '':'', '' : '' },
			                        { '':'', '':''}
			                    ],
			                    'tags'          : ['']
			                },
			                {
			                    'title'         : 'Diseño Editorial',
			                    'description'   : 'Trabajo de diseño editorial orientado a revistas',
			                    'thumbnail'     : ['images/small/3.jpg', 'images/small/4.jpg'],
			                    'large'         : ['images/large/3.jpg', 'images/large/4.jpg'],
			                    'button_list'   :
			                    [
			                        { '':'', '' : '' },
			                        { '':'', '':''}
			                    ],
			                    'tags'          : ['']
			                },
			                {
			                    'title'         : 'Diseño Publicitario',
			                    'description'   : 'Trabajos de diseño publicitario basandose en vectores',
			                    'thumbnail'     : ['images/small/5.jpg', 'images/small/6.jpg'],
			                    'large'         : ['images/large/5.jpg', 'images/large/6.jpg'],
			                    'button_list'   :
			                    [
			                        { '':'', '' : '' },
			                        { '':'', '':''}
			                    ],
			                    'tags'          : ['']
			                },
			                {
			                    'title'         : 'Diseño de Productos',
			                    'description'   : 'Embases, Adversiting y Stand de feria',
			                    'thumbnail'     : ['images/small/7.jpg', 'images/small/8.jpg'],
			                    'large'         : ['images/large/7.jpg', 'images/large/8.jpg'],
			                    'button_list'   :
			                    [
			                        { '':'', '' : '' },
			                        { '':'', '':''}
			                    ],
			                    'tags'          : ['']
			                }
			            ]
			        });
			    });
			</script>
			</div>
		</div>

		<!--DIV Contactos-->
		<div id="Contactos">
			<h3>Contactos</h3>

			<!--Formulario dentro de Contactos-->
			<section id="Form1">
			<form action="contactanos.php" method="post" name="frCliente" onsubmit="return validarCampos();">
				<label class="campoform">Usuario:</label>
				<input type='text' name='txtUsuario' class='cm' required>
				<br>
				<label class="campoform">Email:</label>
				<input type='text' name='txtEmail' class='cm' required>
				<label class="campoform">Direccion:</label>
				<input type='text' name='txtDireccion' class='cm' required>
				<br>
				<label class="campoform">Telefono:</label>
				<input type='text' name='txtTelefono' class='cm' required>
				<br>
				<label class="campoform">Otro Contacto:</label>
				<input type='text' name='txtOtroTelefono' class='cm' required>
				<br>
				<label class="campoform">Mensaje:</label>
				<input type='text' name='txtOtroContacto' class='cm'>
				<br>
				<input type='submit' value='Registrar' class='botonform'>
			</form>
			</section>
		</div>

		<!--Social Media, Facebook, Instagram y Correo-->
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
	<!--Final del contenido principal-->

	<!--JQuerys de la página-->
	<script type="text/javascript" src="js/jquerys.js"></script>
	<script language="javascript" src="js/validacion.js"></script>

	<!--DIV Pie, parte del contenido pero no principal-->
	<div id="pie">
		<p>
			<p>
				No Copyright&copy; Infringement | DHTML-C1-G1-ITLA
			</p>
			<br>
			<a href="registrarusuariopage.php#Perfil">Registrate</a> | <a href="sugerencias.php#Perfil">Sugerencias</a> | <a href="contactanospage.php#Perfil">Contactos</a>
		</p>
	</div>
</div>
</body>
<!--Fin de la página-->
</html>