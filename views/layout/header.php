<?php
error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="icon" href="<?= base_url ?>assets/img/png/logo_carrito.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas Almacén</title>
    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css">
</head>

<body>
</audio>
    <div id="container">
        <!-- CABECERA-->
        <header id="header">
        </header>
        <!-- MENU -->
        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">
            <ul>
                <li>
                    <a href="<?= base_url ?>">Inicio</a>
                </li>
                
                <?php while ($cat = $categorias->fetch_object()) : ?>
                    <li>
                    <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
                    </li>
                <?php endwhile; ?>

            </ul>
        </nav>

        <div id="content">