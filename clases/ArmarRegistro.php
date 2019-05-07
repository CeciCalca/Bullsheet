<?php
  class ArmarRegistro{
    public function armarRegistroUsuario($usuario){
      $registroUsuario = [
        "nombre" => $usuario->getNombre,
        "email" => $usuario->getEmail,
        "password" => Encriptar::hashPassword($usuario->getPassword()),
        "perfil" => 1
      ];
    return $registroUsuario;
  }

  public function armarAvatar(){

  }

  public function armarRegistroOlvide(){

  }
 }
?>
