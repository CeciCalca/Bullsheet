<?php
  class Usuario{
    private $email;
    private $password;
    private $repassword;
    private $nombre;
    private $apellido;
    private $avatar;
    private $perfil;

    public function __construct($email,$password,$repassword=null,$nombre=null,$apellido=null, $avatar=null, $perfil=1){
      $this->email=$email;      
      $this->password=$password;
      $this->repassword=$repassword;
      $this->nombre=$nombre;
      $this->apellido=$apellido;      
      $this->avatar=$avatar;
      $this->perfil=$perfil;
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
    public function getRepassword(){
      return $this->repassword;
    }
    public function setRepassword($repassword){
      $this->repassword=$repassword;
    }
    public function getAvatar(){
      return $this->avatar;
    }
    public function setAvatar($avatar){
      $this->avatar=$avatar;
    }
    public function getPerfil(){
      return $this->perfil;
    }
    public function setPerfil($perfil){
      $this->perfil=$perfil;
    }

  }
 ?>
