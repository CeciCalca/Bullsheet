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

  public function armarAvatar($imagen){
      $nombre = $imagen["avatar"]["name"];
      $ext = pathinfo($nombre,PATHINFO_EXTENSION);
      $archivoOrigen = $imagen["avatar"]["tmp_name"];
      $archivoDestino = dirname(__DIR__);
      $archivoDestino = $archivoDestino."/imagenes/";
      $avatar = uniqid();
      $archivoDestino = $archivoDestino.$avatar;
      $archivoDestino = $archivoDestino.".".$ext;
      move_uploaded_file($archivoOrigen,$archivoDestino);
      $avatar = $avatar.".".$ext;
      return $avatar;
  }
  public function armarRegistroOlvide(){

  }
 }
?>
