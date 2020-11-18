<?php

class Usuario
{

    private $id;

    private $nombre;

    private $apellidos;

    private $email;

    private $password;

    private $rol;

    private $image;

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $this->db->real_escape_string($apellidos);

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]);;

        return $this;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function guardar()
    {
        $nombre = $this->getNombre();
        $apellido = $this->getApellidos();
        $email = $this->getEmail();
        $password = $this->getPassword();

        $sql = "INSERT INTO usuarios VALUES(NULL, '$nombre', '$apellido', '$email', '$password', 'user', null)";
        $guardar = $this->db->query($sql);

        $result = false;
        if ($guardar) {
            $result = true;
        }
        return $result;
    }
}
