<html>
<title>
    Ventas Almacen
</title>

<head>
    <link href="../../css/styless.css" rel="stylesheet" id="bootstrap-css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    
        <div class="col-md-4 col-md-offset-4" id="login">
            <section id="inner-wrapper" class="login">
                <article>
                    <form id="formreg">
                        <h3>Ventas Almacen</h3>
                    <small id="passwordHelpInline" class="text-muted"> ¿Ya tienes una cuenta?<a href="../../index.php"> Regresar</a>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"> </i></span>
                                <input type="text" autocomplete=off class="form-control" id="nombre"
                                    placeholder="Digíte su nombre *" name="nombre" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
                                <input type="text" autocomplete=off class="form-control" id="apellido"
                                    placeholder="Digíte sus apellidos  *" name="apellido" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"> </i></span>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Ingrese su password *" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
                                <input type="email" autocomplete=off class="form-control" id="email"
                                    placeholder="Ingrese su email *" name="email" required>
                            </div>
                        </div>
                        <button id="register" class="btn btn-success" >Registrar <i
                                class="glyphicon glyphicon-send"></i></button>
                    </form>
                </article>
            </section>
        </div>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function (e) {
            $('#register').click(function (e) {
                datos = $('#formreg').serialize();
                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "procesos/paglogin/reglog.php",
                    success: function (r) {
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
</script>