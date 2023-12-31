<?php
	session_start();
	require_once('../php/conn.php');

	if(!isset($_SESSION['id'])){
		header("Location: ../index.html");
	}

	$sql =  "SELECT * FROM tmaper;";
	$sql2 = "SELECT * FROM tmaper WHERE perNom IS NOT NULL;";
	$sql3 = "SELECT * FROM tmaper WHERE carCod = 1;";
	$admin = mysqli_num_rows(mysqli_query($conn, $sql3));
	$cedulas = mysqli_num_rows(mysqli_query($conn, $sql));
	$usuarios = mysqli_num_rows(mysqli_query($conn, $sql2));
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualización de Datos</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
	<!-- navLateral -->
	<section class="full-width navLateral">
			<div class="full-width navLateral-bg btn-menu"></div>
			<div class="full-width navLateral-body">
				<div class="full-width navLateral-body-logo text-center tittles">
					<i class="zmdi zmdi-close btn-menu"></i>  
				</div>
				<figure class="full-width" style="height: 77px;">
					<div class="navLateral-body-cl">
						<img src="assets/img/avatar-male.png" alt="Avatar" class="img-responsive">
					</div>
					<figcaption class="navLateral-body-cr hide-on-tablet">
						<span>
							<?php echo $_SESSION['name']; ?><br>
							<small>Admin</small>
						</span>
					</figcaption>
				</figure>
				<div class="full-width tittles navLateral-body-tittle-menu">
					<i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; DASHBOARD</span>
				</div>
				<nav class="full-width">
					<ul class="full-width list-unstyle menu-principal">
						<li class="full-width">
							<a href="home.php" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-view-dashboard"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									HOME
								</div>
							</a>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="./generardocumentos.php" class="full-width btn-subMenu">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-case"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									GENERAR DOCUMENTOS
								</div>
								
							</a>							
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="#" class="full-width btn-subMenu">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-face"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									CENSO
								</div>
								<span class="zmdi zmdi-chevron-left"></span>
							</a>
							<ul class="full-width menu-principal sub-menu-options">
								<li class="full-width">
									<a href="./listuser_admin.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-account"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											LISTA DE PERSONAS
										</div>
									</a>
								</li>
								<li class="full-width">
									<a href="./agguser_admin.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-account"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											AGREGAR PERSONA
										</div>
									</a>
								</li>
								<li class="full-width">
									<a href="./deleteuser_admin.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-accounts"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											ELIMINAR PERSONA
										</div>
									</a>
								</li>
								<li class="full-width">
									<a href="./updateuser_admin.php" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-account"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											ACTUALIZAR DATOS
										</div>
									</a>
								</li>
							</ul>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="products.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-washing-machine"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									PRODUCTS
								</div>
							</a>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="sales.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-shopping-cart"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									SALES
								</div>
							</a>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="inventory.html" class="full-width">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-store"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									POMARRROSOS
								</div>
							</a>
						</li>
						<li class="full-width divider-menu-h"></li>
						<li class="full-width">
							<a href="#!" class="full-width btn-subMenu">
								<div class="navLateral-body-cl">
									<i class="zmdi zmdi-wrench"></i>
								</div>
								<div class="navLateral-body-cr hide-on-tablet">
									SETTINGS
								</div>
								<span class="zmdi zmdi-chevron-left"></span>
							</a>
							<ul class="full-width menu-principal sub-menu-options">
								<li class="full-width">
									<a href="#!" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-widgets"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											OPTION
										</div>
									</a>
								</li>
								<li class="full-width">
									<a href="#!" class="full-width">
										<div class="navLateral-body-cl">
											<i class="zmdi zmdi-widgets"></i>
										</div>
										<div class="navLateral-body-cr hide-on-tablet">
											OPTION
										</div>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-folder"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
                    Obtén tus documentos en tiempo real
                </p>
			</div>
		</section>
        <section class="container cp">
			
            <div class="inline-container">
                <div class="box">
                    <h4>CARTA DE RESIDENCIA</h4>
                    <img src="./assets/img/documento.jpg" width="70px" alt="cartaresidencia">
					<div class="container-fluid trh">
						<a href="#!" onclick="openResidencyModal('')">Descargar</a>
					</div>
                    
                </div>
					
                <div class="box">
                    <h4>CARTA DE AVAL</h4>
                    <img src="./assets/img/documento.jpg" class="rg" width="70px" alt="cartaaval">
					<div class="container-fluid trw ">
						<a href="#!" onclick="openAvalModal('')">Descargar</a>
					</div>
                   
                </div>
            </div>
        </section>
	</section>

	<script src="./js/documents.js"></script>
</body>
</html>