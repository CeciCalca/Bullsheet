<?php
  class Autenticador{

    static public function iniciarSesion(){
      if(!isset($_SESSION)){
        session_start();
      }
    }

    static public function verificarPassword($password,$passwordHash){
      return password_verify($password,$passwordHash);
    }

    static public function seteoSesion($usuario){
    
        $_SESSION["nombre"]= $usuario["first_name"];
        $_SESSION["apellido"]= $usuario["last_name"];
        $_SESSION["email"] = $usuario["email"];
        $_SESSION["perfil"]= $usuario["profile_id"];
        $_SESSION["avatar"]= $usuario["avatar"];
      }
      static public function seteoCookie($usuario){
        setcookie("email",$usuario["email"],time()+3600);
        setcookie("password",$usuario["password"],time()+3600);
      }



    static public function validarUsuario(){
        if(isset($_SESSION["email"])){
            return true;
        }elseif (isset($_COOKIE["email"])) {
            $_SESSION["email"]=$_COOKIE["email"];
            return true;
        }else{
            return false;
        }
    }


  }
 ?>
