<?php
class Conexion{
    private $servidor= "localhost";
    private $usuario= "root";
    private $password= "";
    private $db= "ventas";


    public function conectar(){
        $conexion=mysqli_connect($this->servidor, $this->usuario, $this->password, $this->db);
        return $conexion;
    }
}
?>
