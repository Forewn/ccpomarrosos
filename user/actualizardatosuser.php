<!-- 
* Copyright 2016 Carlos Eduardo Alfaro Orellana
-->
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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
	<style>
		.error
		{
			color: #d50000; 
			font-size: 0.90rem;
			margin-top: 0.25 rem; 
			position: absolute;
			border-bottom-color: #d50000;
		}
			
	</style>
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
				<i class="zmdi zmdi-account"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					Mantener tus datos personales actualizados es crucial para brindarte la mejor experiencia posible. 				</p>
			</div>
		</section>
		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						ACTUALIZACIÓN DE DATOS
					</div>
					<div class="full-width panel-content">
						<form>
							<h5 class="text-condensedLight">Información del Usuario</h5>
							<div  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="nombre">								
								<label class="mdl-textfield__label" for="nombre">Nombre</label>	
								<span class="error" id="error"></span>				
							</div>
							
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="apellido">
								<label class="mdl-textfield__label" for="carnet">Apellido</label>
								<span class="error" id="error1"></span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<label  class="mdl-textfield__label" for="addressClient1">Fecha de Nacimiento</label>
								<input class="mdl-textfield__input" type="date" id="addressClient1" placeholder="">					
								<span class="mdl-textfield__error">Invalid address</span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="number" id="serial">
								<label class="mdl-textfield__label" for="carnet">Serial del Carnet de la Patria</label>
								<span class="error" id="error2"></span>
							</div>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="tel" id="telefono">
								<label class="mdl-textfield__label" for="numerotlf">Número de Teléfono</label>
								<span class="error" id="error3"></span>
							</div>

							<h5 class="text-condensedLight">Ubicación de la Persona</h5>
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <select class="mdl-textfield__input">
                                            <option value="" disabled="" selected="">Seleccionar Calle</option>
                                            <option value="">Calle 1</option>
                                            <option value="">Calle 2</option>
                                        </select>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<label  class="mdl-textfield__label" for="addressClient1">Dirección</label>
                                        <input class="mdl-textfield__input" type="text" id="addressClient1">					
										<span class="mdl-textfield__error">Invalid address</span>
									</div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<label  class="mdl-textfield__label" for="addressClient1">Número de Casa</label>
                                        <input class="mdl-textfield__input" type="text" id="addressClient1">					
										<span class="mdl-textfield__error">Invalid address</span>
									</div>

							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<select class="mdl-textfield__input" id="familyRole" name="familyRole">
									<option value="" disabled selected></option>
									<option value="leader">Líder de Familia</option>
									<option value="son">Hijo</option>
									<!-- Agrega más roles según sea necesario -->
								</select>
								<label class="mdl-textfield__label" for="familyRole">Rol Familiar</label>
								<span class="mdl-textfield__error">Selecciona un rol</span>
							</div>
							
							
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="email" id="correo">
								<label class="mdl-textfield__label" for="emailCompany">Correo Electrónico</label>
								<span class="error" id="error4"></span>
							</div>

							<h5 class="text-condensedLight">Ideología</h5>
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <select class="mdl-textfield__input">
                                            <option value="" disabled="" selected="">Seleccione el Tipo de Voto</option>
                                            <option value="">Voto Duro</option>
                                            <option value="">Voto Blando</option>
                                            <option value="">Voto Opositor</option>
                                        </select>
                                 	</div>
						
							<h5 class="text-condensedLight">Información del Cilindro de Gas</h5>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                                        <input type="checkbox" class="mdl-radio__button" name="options" value="avatar-male.png">                                  
                                        <span class="mdl-radio__label">Cilindro de 10kg</span><br>                              
                                        <input placeholder="cantidad" class="mdl-textfield__input" type="text">
                                    </label>
                                    <br><br>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                                        <input type="checkbox"  class="mdl-radio__button" name="options" value="avatar-male.png">                                  
                                        <span class="mdl-radio__label">Cilindro de 18kg</span><br>                              
                                        <input placeholder="cantidad" class="mdl-textfield__input" type="text">
                                    </label>
                                    <br><br>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                                        <input type="checkbox"  class="mdl-radio__button" name="options" value="avatar-male.png">                                  
                                        <span class="mdl-radio__label">Cilindro de 27kg</span><br>                              
                                        <input placeholder="cantidad" class="mdl-textfield__input" type="text">
                                    </label>
                                    <br><br>
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" >
                                        <input type="checkbox"  class="mdl-radio__button" name="options" value="avatar-male.png">                                  
                                        <span class="mdl-radio__label">Cilindro de 43kg</span><br>                              
                                        <input placeholder="cantidad" class="mdl-textfield__input" type="text">
                                    </label>
							<p class="text-center">
								<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany">
									<i class="zmdi zmdi-check"></i>

								</button>
								<div class="mdl-tooltip" for="btn-addCompany">Enviar</div>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
<script src="./js/actualizardatouser.js"></script>
</html>