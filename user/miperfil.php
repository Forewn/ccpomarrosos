<?php
	session_start();
	if (!isset($_SESSION["id"])) {
		session_destroy();
		header("location: ../index.html");
	}

	require "../php/conn.php";

	// Obtener datos del usuario
	$userId = $_SESSION["id"];
	$query = "SELECT * FROM tmaper WHERE perCod = $userId"; 
		$result = mysqli_query($conn, $query);

	if ($result) {
		$userData = mysqli_fetch_assoc($result);
	} else {
		// Manejar el error según tus necesidades
		die("Error al obtener los datos del usuario");
	}
?>

<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mi Perfil</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>
	<!-- Notifications area -->
	<section class="full-width container-notifications">
		<div class="full-width container-notifications-bg btn-Notification"></div>
	    <section class="NotificationArea">
	        <div class="full-width text-center NotificationArea-title tittles">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
	        <a href="#" class="Notification" id="notifation-unread-1">
	            <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle"></i>
	                    <strong>New User Registration</strong> 
	                    <br>
	                    <small>Just Now</small>
	                </p>
	            </div>
	        	<div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notification as UnRead</div> 
	        </a>
	        <a href="#" class="Notification" id="notifation-read-1">
	            <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>New Updates</strong> 
	                    <br>
	                    <small>30 Mins Ago</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Notification as Read</div>
	        </a>
	        <a href="#" class="Notification" id="notifation-unread-2">
	            <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle"></i>
	                    <strong>Archive uploaded</strong> 
	                    <br>
	                    <small>31 Mins Ago</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Notification as UnRead</div>
	        </a> 
	        <a href="#" class="Notification" id="notifation-read-2">
	            <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>New Mail</strong> 
	                    <br>
	                    <small>37 Mins Ago</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notification as Read</div>
	        </a>
	        <a href="#" class="Notification" id="notifation-read-3">
	            <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
	            <div class="Notification-text">
	                <p>
	                    <i class="zmdi zmdi-circle-o"></i>
	                    <strong>Folder delete</strong> 
	                    <br>
	                    <small>1 hours Ago</small>
	                </p>
	            </div>
	            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notification as Read</div>
	        </a>  
	    </section>
	</section>
	<!-- navBar -->
	<div class="full-width navBar">
		<div class="full-width navBar-options">
			<i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
			<div class="mdl-tooltip" for="btn-menu">Menu</div>
			<nav class="navBar-options-list">
				<ul class="list-unstyle">
					<li class="btn-Notification" id="notifications">
						<i class="zmdi zmdi-notifications"></i>
						<!-- <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
						<div class="mdl-tooltip" for="notifications">Notifications</div>
					</li>
					<li class="btn-exit" id="btn-exit">
						<i class="zmdi zmdi-power"></i>
						<div class="mdl-tooltip" for="btn-exit">LogOut</div>
					</li>
					<li class="text-condensedLight noLink" ><small>User Name</small></li>
					<li class="noLink">
						<figure>
							<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
						</figure>
					</li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- INICIO DEL PANEL DE NAVEGACIÓN -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> Pagina de Usuario
			</div>
			<figure class="full-width" style="height: 77px;">
				<div class="navLateral-body-cl">
					<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption class="navLateral-body-cr hide-on-tablet">
					<span>
						Full Name user<br>
						<small>user</small>
					</span>
				</figcaption>
			</figure>
			<div class="full-width tittles navLateral-body-tittle-menu">
					<i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; PANEL</span>
				</div>
				<nav class="full-width">
					<ul class="full-width list-unstyle menu-principal">
						<li class="full-width">
							<a href="home.php" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-view-dashboard"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									INICIO
								</div>
							</a>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="actualizardatosuser.php" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-washing-machine"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									ACTUALIZAR DATOS
								</div>
							</a>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="docsuser.php" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-shopping-cart"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									DOCUMENTOS
								</div>
							</a>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="miperfil.php" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-shopping-cart"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									MI PERFIL
								</div>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</section>
		<!--FIN PANEL DE NAVEGACIÓN-->
		
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-account text-center" ></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight text-center">
                       Encuentra aqui Tus datos en tiempo real			</p>
			</div>
		</section>
		<div class="full-width divider-menu-h"></div>

        <section class="full-width header-well">
			<div class="mdl-grid cont">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
    
                  
                                            
                    <div class="container mt-5">
						
                        <!-- Div con el nombre de usuario -->
                        <div class="col-12">
                            <h2 class="text-center perfil">Mi Perfil</h2>
						
                        </div>
						<div class=" text-center">
							<button class="bte text-center" onclick="mostrarSeccion('perfil')">Mostrar Perfil</button>
							<button class="bte text-center" onclick="mostrarSeccion('direccion')">Mostrar Dirección</button>
							<button class="bte text-center" onclick="mostrarSeccion('bombona')">Mostrar Bombona</button>
			
						</div>
						 
                        <div class="row">
                          <div class="col-12 gh">
							<div class="col-6" >
								<h3 class="text-left nm">Ashly Torres hanneiker velandia</h3>

							</div>
							<div class="col-6 container-fluid et">
								<a href="actualizar.html" class="edit-link">
									<i class="zmdi zmdi-edit "></i>
								</a>
							</div>
							
							
                          </div>
                        </div>
                      
                        <!-- Div con el correo electrónico -->
                        <div class="row">

                          <div class="col-12 perfil-section animated-section">
							<h3 class="nm">Mis Datos</h3>
                            <div class="email-container">
                              <div class="email-label">Cédula:</div>
                              <div class="ll"><?php echo $userData['perCod']; ?></div>
                            </div>
							<div class="email-container">
                                <div class="email-label">Carnet:</div>
                                <div class="ll">12344566</div>
                            </div>
							<div class="email-container">
                                <div class="email-label">Fecha de Nacimiento</div>
                                <div class="ll">16/07/2003</div>
                            </div>
							<div class="email-container">
                                <div class="email-label">Número de Télefono</div>
                                <div class="ll">0412-6759712</div>
                            </div>
                            <div class="email-container">
                                <div class="email-label">Correo:</div>
                                <div class="ll">ashlytorresvelandia@gmail.com</div>
                            </div>
							<div class="email-container">
                                <div class="email-label">Rol Familiar:</div>
                                <div class="ll">Jefe de Familia</div>
                            </div>
							<div class="email-container">
                                <div class="email-label">Tipo De Voto:</div>
                                <div class="ll">Duro</div>
                            </div>
                          </div>
                        </div>
                      </div>

							<div class="row">
								<div class="col-12 direccion-section hidden animated-section">
									<h3 class="nm">Mi Dirección</h3>
									<div class="email-container">
										<div class="email-label">Número de Calle:</div>
										<div class="ll">L-23</div>
									</div>
									<div class="email-container">
										<div class="email-label">Dirección</div>
										<div class="ll">Barrio el Lobo, detras de mariankids</div>
									</div>
									<div class="email-container">
										<div class="email-label">Número de Casa</div>
										<div class="ll">P-3</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-12 bombona-section hidden animated-section">
									<h3 class="nm">Mi Bombona</h3>
									<div class="email-container">
										<div class="email-label">Tipo de Bombona:</div>
										<div class="ll">18kg</div>
									</div>
									<div class="email-container">
										<div class="email-label">Cantidad:</div>
										<div class="ll">2</div>
									</div>
									
								</div>
							</div>


					</div>
                      
                   
                </div>
            </div>
		</section>


		
	</section>

	<!-- para mostrar las secciones de la pagina -->
	<script>
		function mostrarSeccion(seccion) {
			// Ocultar todas las secciones
			document.querySelectorAll('.perfil-section, .direccion-section, .bombona-section').forEach(function(el) {
				el.classList.add('hidden');
			});
	
			// Mostrar la sección seleccionada
			document.querySelector('.' + seccion + '-section').classList.remove('hidden');
		}

			// Aplicar clase para la animación
			setTimeout(function() {
            selectedSection.classList.add('animated-section');
        }, 10);
	</script>
</body>
</html>