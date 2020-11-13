<?php
//Procesa los datos que vienen desd formulario login
require_once '../../clases/Usuario.php';
$u = new Usuario();
$datos= array(
    $_POST["Uname"], 
    $_POST["Pass"]
);

//Envía los datos al modelo
echo $u->loginUser($datos);
?>