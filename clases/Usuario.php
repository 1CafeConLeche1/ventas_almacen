<?php
require_once "Conexion.php";
class Usuario{
 public function registrarUsuario($datos){
     $c = new Conexion();

     $conexion = $c->conectar();

     $fecha = new Datetime();
     $fechaf = $fecha->format('Y-m-d');

     $sql = "INSERT INTO usuarios(nombre, apellido, email, password, fecha_registro)
     values (
         '$datos[0]',
         '$datos[1]',
         '$datos[2]',
         '$datos[3]',
         $fechaf
    )
    ";
    return mysqli_query($conexion, $sql);
 }

  public function loginUser($datos){

    $c = new Conexion();

    $conexion = $c->conectar();

    $sql = "SELECT * FROM usuarios
    where email = '$datos[0]' and password='$datos[1]'
    ";

  $result = mysqli_query($conexion, $sql);

  if(mysqli_num_rows($result) > 0){
    return 1;
  }else{
    return 0;
  }
    
  }

  public function editar(){


  }

  public function eliminar(){


  }
}
?>