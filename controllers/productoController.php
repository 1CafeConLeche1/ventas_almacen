<?php 
class productoController{
    public function index(){
        require_once 'views/producto/new_art.php';
    }

    public function destacados(){
        require_once 'views/producto/destacados.php';
    }
}
?>