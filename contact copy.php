<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<?php

// Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'muebles_orumaito', 3305);

// Verifica si la conexión es exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

?>

	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
					<div id="fh5co-logo"><a href="index.html">Shop.</a></div>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						<li class="has-dropdown">
							<a href="product.html">Shop</a>
							<ul class="dropdown">
								<li><a href="single.html">Single Shop</a></li>
							</ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li class="active"><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
						      <input type="text" placeholder="Search..">
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						    </div>
						</li>
						<li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contact Us</h1>
							<h2>Free html5 templates by <a href="https://themewagon.com/theme_tag/free/" target="_blank">Themewagon</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-push-1 animate-box">
					<h3>Get In Touch</h3>
					<form method="post">
						<div class="row form-group">
							<div class="col-md-4">
								<!--label for="fname">Nombre</label--> 
								<input type="text" id="fname" class="form-control" name="nombre" placeholder="Nombre">
							</div>
							<div class="col-md-4">
								<!-- <label for="pname">Last Name</label> -->
								<input type="text" id="pname" class="form-control" name="apellido_p" placeholder="Apellido paterno">
							</div>
							<div class="col-md-4">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" id="mname" class="form-control" name="apellido_m" placeholder="Apellido materno">
							</div>
							
						</div>
						<div class="row form-group">
							<div class="col-md-4">
								<!-- <label for="nation">Nacionalidad</label> -->
								<input type="text" id="Contra" class="form-control" name="contra" placeholder="Contrasena">
							</div>
							<div class="col-md-8">
								<!-- <label for="email">correo</label> -->
								<input type="text" id="email" class="form-control" name="correo" placeholder="Correo">
						</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-4">
								<!-- <label for="gender">Genero</label>-->
								<select id="gender" name="genero" class="form-control">
									<option value="Genero" disabled selected hidden>Genero</option>
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
								</select>
							</div>
							<div class="col-md-4">
								<!-- <label for="tel">Telefono</label> -->
								<input type="text" id="mname" class="form-control" name="telefono" placeholder="Telefono">
							</div>
							<div class="col-md-4">
								<!-- <label for="Estado civil">Estado civil</label>-->
								<select id="estado civil" name="estado_civil" class="form-control">
									<option value="civil" disabled selected hidden>Estado civil</option>
									<option value="Casado">Casado</option>
									<option value="Soltero">Soltero</option>
									<option value="Union Libre">Union libre</option>
									<option value="Otro">Otro</option>
								</select>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-4">
								<!-- <label for="nation">Nacionalidad</label> -->
								<input type="text" id="nation" class="form-control" name="nacionalidad" placeholder="Nacionalidad">
							</div>
							<div class="col-md-4">
								<!-- <label for="age">Edad</label> -->
								<input type="text" id="age" class="form-control" name="edad" placeholder="Edad">
							</div>
							<div class="col-md-4">
								<!-- <label for="job">Ocupacion</label> -->
								<select id="ocupacion" name="ocupacion" class="form-control">
									<option value="job" disabled selected hidden>Ocupacion</option>
									<option value="Estudiante">Estudiante</option>
									<option value="Empleado">Empleado</option>
									<option value="Autonomo">Autonomo</option>
									<option value="Desempleado">Desempleado</option>
									<option value="Jubilado">Jubilado</option>
									<option value="No Especificado">No especificado</option>
								</select>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-4">
								<select id="escolar" name="escolaridad" class="form-control">
									<option value="school" disabled selected hidden>Escolaridad</option>
									<option value="Primaria">Primaria</option>
									<option value="Secundaria">Secundaria</option>
									<option value="Media Superior">Medio superior</option>
									<option value="Nivel Superior">Nivel superior</option>
								</select>
						</div>
						<div class="col-md-3">
							<select id="tarjeta" name="tipo_tarjeta" class="form-control">
								<option value="school" disabled selected hidden>Tarjeta</option>
								<option value="Debito">Debito</option>
								<option value="Credito">Credito</option>
							</select>
					</div>
					
			</div>
						<div class="form-group">
							<input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Newsletter</h2>
					<p>Just stay tune for our latest Product. Now you can subscribe</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>Shop.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
	<?php

// Comprobamos si se ha enviado el formulario
if(isset($_POST['enviar'])) {

    // Validar si los campos están presentes antes de usarlos
    $tipo_tarjeta = isset($_POST['tipo_tarjeta']) ? $_POST['tipo_tarjeta'] : '';
    $contra = isset($_POST['contra']) ? $_POST['contra'] : '';

    // Si ambos campos están completos, procesar los datos
    if (!empty($tipo_tarjeta) && !empty($contra)) {

        // Recopilamos los demás datos del formulario
        $nombre = $_POST['nombre'];
        $apellido_p = $_POST['apellido_p'];
        $apellido_m = $_POST['apellido_m'];
        $genero = $_POST['genero'];
        $telefono = $_POST['telefono'];
        $estado_civil = $_POST['estado_civil'];
        $nacionalidad = $_POST['nacionalidad'];
        $edad = $_POST['edad'];
        $ocupacion = $_POST['ocupacion'];
        $escolaridad = $_POST['escolaridad'];
        $correo = $_POST['correo'];
        $fecha = $_POST['fecha'];
        
        // Aquí puedes agregar un hash para la contraseña si deseas
        // $contra = password_hash($_POST['contra'], PASSWORD_DEFAULT);

        // Consulta para insertar los datos en la tabla "usuarios"
        $insertar = "INSERT INTO usuarios (nombre, apellido_p, apellido_m, genero, telefono, estado_civil, nacionalidad, edad, ocupacion, escolaridad, tipo_tarjeta, correo, fecha, contra) 
                     VALUES ('$nombre', '$apellido_p', '$apellido_m', '$genero', '$telefono', '$estado_civil', '$nacionalidad', '$edad', '$ocupacion', '$escolaridad', '$tipo_tarjeta', '$correo', '$fecha', '$contra')";

        // Ejecutar la consulta
        if (mysqli_query($conn, $insertar)) {
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar los datos: " . mysqli_error($conn);
        }

    } else {
        echo "Faltan datos en los campos de tipo_tarjeta o contra.";
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>
</html>

