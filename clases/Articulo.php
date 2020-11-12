<?php
class Articulo{

    public function agregarArticulo($datos){
        $c = new Conexion();
   
        $conexion = $c->conectar();
   
        $sql = "INSERT INTO articulos(nom_art, modelo, descrip, cantidad)
        values (
            '$datos[0]',
            '$datos[1]',
            '$datos[2]',
            '$datos[3]',
       )
       ";
       return mysqli_query($conexion, $sql);
    }
   
}

?>