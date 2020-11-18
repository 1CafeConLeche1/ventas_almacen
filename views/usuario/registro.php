<h1 id="pepe">Crea una cuenta</h1>

<?php
if (isset($_SESSION['register']) && $_SESSION['register'] == 'Complete') : ?>

    <strong class="alert_green">Se ha registrado exitosamente</strong>

<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
    <strong class="alert_red">No se ha podido registrar</strong>

<?php endif; ?>

<?php Utils::deleteSession('register'); ?>

<form action="<?= base_url ?>usuario/guardar" method="POST">
    <label for="nombre"><b>Nombre</b> <i id="user" class="fa fa-user"></i></label>
    <input type="text" name="nombre" placeholder="Nombre" autocomplete="off" required>

    <label for="apellidos" name="apellidos"><b>Apellidos</b> <i id="user" class="fa fa-user"></i></label>
    <input type="text" name="apellidos" placeholder="Apellidos" autocomplete="off" required>

    <label for="email" name="email"><b>Correo Electrónico</b> <i id="email" class="material-icons">email</i></label>
    <input type="email" name="email" placeholder="Email" autocomplete="off" required>

    <label for="password" name="password"><b>Contraseña</b> <i id="pass" class="material-icons">beenhere</i></label>
    <input type="password" name="password" placeholder="Contraseña" autocomplete="off" required>

    <input type="submit" value="Crear cuenta">
</form>