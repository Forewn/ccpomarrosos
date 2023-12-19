<?php
    session_start();
    if(isset($_SESSION['id'])){
        header('Location: ./admin/home.php');
    }
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/login.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(img/login1.jpg);">
							<div class=" p-3 p-lg-5 text-center d-flex align-items-center order-md-last" z-index="0">
								<div class="text w-100">
									<br>
									<br>
									<div class="colorsi">
										<h2>Bienvenido a nuestra Comunidad</h2>
										<p>¿Aun no tienes una cuenta?</p>
									</div>
									<a href="./signup.php" class=" btn btn-primary submit px-3">Registrarse</a>
								</div>
							</div>
			      		</div>
						<div class="login-wrap p-4 p-md-5">
			      			<div class="d-flex">
			      				<div class="w-100">
			      					<h3 class="mb-4">Iniciar Sesión</h3>
			      				</div>
			      			</div>
							<form action="./php/iniciar.php" method="post" id="formulario" class="signin-form">
			      				<div class="form-group mb-3">
									<i class='bx bx-user'></i>
									<label class="label" for="name">Cédula</label>
									<input type="text" class="form-control" placeholder="Cédula" required name="cedula" id="cedula">
			      				</div>
								<div class="form-group mb-3">
									<i class='bx bx-key'></i>
		            				<label class="label" for="password">Contraseña</label>
		              				<input type="password" class="form-control" placeholder="Contraseña" required name="contra" id="password">
		            			</div>
								<div class="form-group">
									<button type="submit" class="form-control btn-primary rounded submit px-3">Iniciar Sesión</button>
								</div>
		            			<div class="form-group d-md-flex">
		            				<div class="w-50 text-left">
			            				<label class="checkbox-wrap checkbox-primary mb-0">Recordar Contraseña
											<input type="checkbox" checked>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Olvidé mi Contraseña</a>
									</div>
		            			</div>
							</form>
		        		</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/login_validation.js"></script>
	<script src="js/jquery.min.login.js"></script>
  	<script src="js/popper.login.js"></script>
  	<script src="js/bootstrap.min.login.js"></script>
</body>
</html>

