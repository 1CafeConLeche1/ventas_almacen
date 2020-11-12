<!DOCTYPE html>
<html>

<head>
	<title>Ventas Almacen|Iniciar sesión 	</title>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/styles_login.css">
</head>

<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Iniciar sesión</h3>
				</div>
				<div class="card-body">
					<form id="formlog">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text"  id="Uname" name="Uname" name="Uname" class="form-control" autocomplete="off" placeholder="Usuario">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="Pass" name="Pass" name="Pass" class="form-control" autocomplete="off" placeholder="Contraseña">
						</div>
						<div class="form-group">
							<span  name="log" id="log" class="btn float-left login_btn">Iniciar sesión
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						¿No tienes cuenta?<a href="vistas/usuario/registro.php">Regístrate</a>
					</div>>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
<script type="text/javascript">
	$(document).ready(function() {

			$('#log').click(function(e) {
				e.preventDefault();
				datos = $('#formlog').serialize();
				$.ajax({
					type: "POST",
					data: datos,
					url: "procesos/paglogin/login.php",

					success: function(r) {
						console.log(r);
						if (r == 1) {
							window.location = "vistas/dashboard/inicio.php";
						} else {
							alert("Tas mamending");
						}
					}
				})

			})
		}

	)
</script>