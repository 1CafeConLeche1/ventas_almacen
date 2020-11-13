<?php

//Este código procesa la información que viene del formulario registro usuario
require_once "../../clases/Usuario.php";
$usuario = new Usuario();
$datos = array(
$_POST["nombre"],
$_POST["apellido"],
$_POST["email"],
$_POST["password"]
);

//Se envían los datos al modelo para almacenarlos en la base de datos 
echo $usuario->registrarUsuario($datos);
?>