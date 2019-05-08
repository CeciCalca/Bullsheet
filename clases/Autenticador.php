<?php
  class Autenticador{

    static public function iniciarSesion(){
      if(isset($_SESSION)){
        session_start;
      }
    }

    static public function verificarPassword($password,$passwordHash){
      return password_verify($password,$passwordHash);
    }
  }
 ?>
