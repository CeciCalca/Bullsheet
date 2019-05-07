<?php
  class BaseJSON extends BaseDatos{
    private $nombreArchivo;
    public function __construct($nombreArchivo){
      $this->nombreArchivo=$nombreArchivo;
    }
    public function getNombreArchivo(){
      return $this->nombreArchivo;
    }
    public function setNombreArchivo(){
      $this->nombreArchivo=$nombreArchivo;
    }
    public function guardar($registroUsuario){
      $jsusuario = json_encode($registroUsuario);
      file_put_contents($this->nombreArchivo,$jsusuario. PHP_EOL, FILE_APPEND);
    }
    public function leer(){

    }
    public function actualizar(){

    }
    public function borrar(){

    }
  }
 ?>
