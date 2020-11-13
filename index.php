<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style_index.css">
    <title>Ventas Almacen | Iniciar Sesión</title>
</head>

<body>
    <div class="login-reg-panel">
        <div class="login-info-box">
            <h2>¿Ya tienes una cuenta?</h2>
            <p>¿Qué hace aquí entonces?</p>
            <label id="label-register" for="log-reg-show">Iniciar sesión</label>
            <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
        </div>

        <div class="register-info-box">
            <h2>¿No tienes cuenta?</h2>
            <p>Crea tu cuenta acá</p>
            <label id="label-login" for="log-login-show">Registrar</label>
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>

        <div class="white-panel">
            <form id="formlog">
                <div class="login-show">
                    <h2>Inicia sesión</h2>
                    <input type="text" id="Uname" name="Uname" placeholder="Correo Electrónico" autocomplete="off">
                    <input type="password" id="Pass" name="Pass" placeholder="Contraseña" autocomplete="off">
                    <input id="log" name="log" type="button" value="Iniciar sesión" autocomplete="off">
                </div>
            </form>
            <form id="formreg">
                <div class="register-show">
                    <h2>Crea tu nuevo usuario</h2>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre" autocomplete="off">
                    <input type="text" id="apellido" name="apellido" placeholder="Apellido" autocomplete="off">
                    <input type="text" id="email" name="email" placeholder="Correo Electrónico" autocomplete="off">
                    <input type="password" id="password" name="password" placeholder="Contraseña" autocomplete="off">
                    <input id="register" name="register" type="button" value="Crear cuenta">
            </form>
        </div>
    </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('.login-info-box').fadeOut();
        $('.login-show').addClass('show-log-panel');
    });


    $('.login-reg-panel input[type="radio"]').on('change', function() {
        if ($('#log-login-show').is(':checked')) {
            $('.register-info-box').fadeOut();
            $('.login-info-box').fadeIn();

            $('.white-panel').addClass('right-log');
            $('.register-show').addClass('show-log-panel');
            $('.login-show').removeClass('show-log-panel');

        } else if ($('#log-reg-show').is(':checked')) {
            $('.register-info-box').fadeIn();
            $('.login-info-box').fadeOut();

            $('.white-panel').removeClass('right-log');

            $('.login-show').addClass('show-log-panel');
            $('.register-show').removeClass('show-log-panel');
        }
    });
    $(document).ready(function(e) {
            $('#register').click(function(e) {
                datos = $('#formreg').serialize();
                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "procesos/paglogin/reglog.php",
                    success: function(r) {
                        console.log(r);
                        if (r == 1) {
                            alert("Agregado con exito");
                        } else {
                            alert("Hubo un error al agregar");
                        }
                    }
                })

            })
        }

    )
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