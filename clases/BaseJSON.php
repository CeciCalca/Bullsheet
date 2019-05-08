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

    public function buscarEmail($email){
        $usuarios = abrirBaseDatos();
        foreach ($usuarios as $usuario) {
            if($email === $usuario["email"]){
                return $usuario;
            }
        }
        return null;
    }

    public function abrirBaseDatos(){
        if(file_exists("usuarios.json")){
            $baseDatosJson= file_get_contents("usuarios.json");
            $baseDatosJson = explode(PHP_EOL,$baseDatosJson);

            array_pop($baseDatosJson);

            foreach ($baseDatosJson as  $usuarios) {
                $arrayUsuarios[]= json_decode($usuarios,true);
            }

            return $arrayUsuarios;
        }else{
            return null;
        }
    }

    public function leer(){
    }
    
    public function borrar(){
    }
    
    public function actualizar(){
    }
    


  }
 ?>
