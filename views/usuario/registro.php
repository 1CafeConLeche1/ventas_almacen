<img id="usereg" src="<?=base_url?>assets/img/png/register-user.png" alt="reg">

<?php
if (isset($_SESSION['register']) && $_SESSION['register'] == 'Complete') : ?>

    <strong class="alert_green">Registro completado correctamente</strong>

<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
    <strong class="alert_red">Registro fallido, introduce bien los datos</strong>

<?php endif; ?>

<?php Utils::deleteSession('register'); ?>

<form action="<?=base_url?>usuario/guardar" method="POST">

<label for="nombre">Nombre <i id="miniuser" class="fa fa-user" style="font-size:24px"></i></label>
<input type="text" name="nombre" autocomplete="off" placeholder="Usuario" required>

<label for="apellidos">Apellidos <i id="miniuser" class="fa fa-user" style="font-size:24px"></i></label>
<input type="text" name="apellidos" autocomplete="off" placeholder="Apellidos" required>

<label for="email">Email <i id="miniemail" class="fa fa-envelope" style="font-size:24px"></i></label>
<input type="email" name="email" autocomplete="off" placeholder="Email" required>

<label for="password">Contraseña <i id="minikey" class="fa fa-key" style="font-size:24px"></i></label>
<input type="password" name="password" autocomplete="off" placeholder="Contraseña" required>

<input type="submit" value="registrarse">
</form>