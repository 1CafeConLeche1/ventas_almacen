<aside id="lateral">
  <form action="<?= base_url ?>usuario/login" method="POST">
    <div id="login" class="container">
      <?php if (!isset($_SESSION['identity'])) : ?>
        <h1>Iniciar Sesión</h1>
        <p>Completa todos los espacios.</p>
        <hr>
        <label for="email"><b>Correo Electrónico</b></label>
        <input type="text" placeholder="Ingrese su email" name="email" autocomplete="off" required>

        <label for="password"><b>Contraseña</b></label>
        <input type="password" placeholder="Ingrese Password" name="password" autocomplete="off" required>

        <input type="submit" value="Enviar">

        <div class="container signin">
          <p>¿Ya tiene cuenta?<a href="<?= base_url ?>usuario/registro">Registrarse</a>.</p>
        </div>
  </form>
<?php else :  ?>
  <h3>Bienvenido: <?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
<?php endif; ?>

<ul>
  <?php if (isset($_SESSION['identity'])) : ?>
    <li><a href="#">Gestionar Categorías</a>
    </li>
    <li><a href="#">Gestionar productos</a>
    </li>
    <li><a href="#">Gestionar pedidos</a>
    </li>
    <li>
      <a href="#">Mis pedidos</a>
    </li>
    <li>
      <a href="<?= base_url ?>usuario/logout">Cerrar sesión</a>
    </li>
  <?php endif; ?>
</ul>
</aside>
<div id="central">