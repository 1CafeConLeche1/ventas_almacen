<aside id="lateral">
<form action="/action_page.php">
  <div id="login" class="container">
    <h1>Iniciar Sesión</h1>
    <p>Completa todos los espacios.</p>
    <hr>

    <label for="email"><b>Correo Electrónico</b></label>
    <input type="text" placeholder="Ingrese su email" name="email" autocomplete="off" required>

    <label for="password"><b>Contraseña</b></label>
    <input type="password" placeholder="Ingrese Password" name="psw" autocomplete="off" required>

    <input type="submit" value="Enviar">
  
  <div class="container signin">
    <p>¿Ya tiene cuenta?<a href="<?=base_url?>usuario/registro">Registrarse</a>.</p>
  </div>
</form>
</aside>
<div id="central">