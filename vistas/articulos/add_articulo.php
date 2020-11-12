<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/stylees.css">
    <title>Añadir Artículo</title>
</head>

<body>
    <?php include('../../includes/navbar.php'); ?>
    <div class="wrapper fadeInDown">
        <div id="formContent">



            <div class="fadeIn first">
                <img src="data:image/png;base64,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" id="icon" alt="User Icon" />
            </div>


            <form id="form_add_art">
                <input type="text" id="nom_art" class="fadeIn second" name="nom_art" autocomplete="off" placeholder="Nombre del Artículo">
                <input type="text" id="model" class="fadeIn third" name="model" autocomplete="off" placeholder="Modelo">
                <input type="text" id="descrip" class="fadeIn fourth" name="descrip" autocomplete="off" placeholder="Descripción del Artículo">
                <div>
                    <button id="add_articulo" name="add_articulo">
                </div>
                <div id="submit">
                    <input type="number" id="canti" class="fadeIn fifth" name="canti" placeholder="Cantidad de Artículo">
                </div>

                <div id="formFooter">
                    <input type="file" id="file" class="fadeIn sixth" name="file" placeholder="Cantidad de Artículo">
                </div>
            </form>

        </div>
    </div>
</body>

</html>
<script type="text/javascript">
    $(document).ready(function(e) {
            $('#add_articulo').click(function(e) {
                datos = $('#form_add_art').serialize();
                $.ajax({
                    type: "POST",
                    data: datos,
                    url: "procesos/articulos/proc_add_art.php",
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
</script>