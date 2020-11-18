<h1>Crea una cuenta</h1>

<?php
if (isset($_SESSION['register']) && $_SESSION['register'] == 'Complete') : ?>

    <strong class="alert_green">Se ha registrado exitosamente</strong>

<?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
    <strong class="alert_red">No se ha podido registrar</strong>

<?php endif; ?>

<?php Utils::deleteSession('register'); ?>

<form action="<?=base_url?>usuario/guardar" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>

    <label for="apellidos" name="apellidos">Apellidos</label>
    <input type="text" name="apellidos" required>

    <label for="email" name="email">Correo Electrónico</label>
    <input type="email" name="email" required>

    <label for="password" name="password">Contraseña</label>
    <input type="password" name="password" required>

    <input type="submit" value="Crear cuenta">
</form>