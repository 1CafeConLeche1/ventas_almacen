<?php
require_once '../../clases/Usuario.php';
$u = new Usuario();
$datos= array(
    $_POST["Uname"], 
    $_POST["Pass"]
);

echo $u->loginUser($datos);
?>