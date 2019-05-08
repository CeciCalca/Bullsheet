<?php
  class Usuario{
    private $email;
    private $password;
    private $repassword;
    private $nombre;
    private $apellido;
    private $avatar;

    public function __construct($email,$password,$repassword=null,$nombre=null,$apellido=null $avatar=null){
      $this->nombre=$nombre;
      $this->apellido=$apellido;
      $this->email=$email;
      $this->password=$password;
      $this->repassword=$repassword;
      $this->avatar=$avatar;
    }
    public function getNombre(){
      return $this->nombre;
    }
    public function setNombre($nombre){
      $this->nombre=$nombre;
    }
    public function getApellido(){
      return $this->apellido;
    }
    public function setApellido($apellido){
      $this->apellido=$apellido;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setEmail($email){
      $this->email=$email;
    }
    public function getPassword(){
      return $this->password;
    }
    public function setPassword($password){
      $this->password=$password;
    }

  }
 ?>
