<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas Almacén</title>
    <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css">
</head>

<body>
    <div id="container">
        <!-- CABECERA-->
        <header id="header">
            <div id="logo">
                <img src="<?= base_url ?>assets/img/titulo.png" alt="Carrito Logo" />
                <a href="index.php">
                    Ventas Almacén
                </a>

            </div>
        </header>
        <!-- MENU -->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="<?= base_url ?>producto/index">Inicio</a>
                </li>
                <?php while ($cat = $categorias->fetch_object()) : ?>
                    <li>
                        <a href="#"><?= $cat->nombre ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        </nav>

        <div id="content">