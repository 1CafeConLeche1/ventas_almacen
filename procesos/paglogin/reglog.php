<?php
require_once "../../clases/Usuario.php";
$usuario = new Usuario();
$datos = array(
$_POST["nombre"],
$_POST["apellido"],
$_POST["email"],
$_POST["password"]
);

echo $usuario->registrarUsuario($datos);
?>