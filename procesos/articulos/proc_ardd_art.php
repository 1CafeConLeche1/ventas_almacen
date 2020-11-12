<?php
require_once "../../clases/Articulo.php";
$articulo = new Articulo();
$direccion="../../cargas/";
//$archivo=$direccion.basename($_FILES["nom_art"]["name"]);

//move_uploaded_file($_FILES["nom_art"]["tmp_name"],$archivo);


$datos = array(
$_POST["nom_art"],
$_POST["model"],
$_POST["descrip"],
$_POST["canti"],
//$archivo
);

var_dump($datos);

echo 1;

//echo $articulo->agregarArticulo($datos);
?>
