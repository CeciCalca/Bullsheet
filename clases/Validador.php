<?php
  class Validador{
    public function validacionUsuario($usuario, $repassword){
        $errores=array();
        $nombre = trim($usuario->getNombre());
        if(isset($nombre)){
            if(empty($nombre)){
                $errores["nombre"]= "El campo nombre no puede estar vacio";
            }
        }
        $apellido = trim($usuario->getApellido());
        if(isset($apellido)){
            if(empty($apellido)){
                $errores["apellido"]= "El campo apellido no puede estar vacio";
            }
        }

        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido!";
        }

        $password= trim($usuario->getPassword());

        if(empty($password)){
            $errores["password"]= "El campo password no puede quedar en blanco";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener como mínimo 6 caracteres";
        }

        if(isset($repassword)){
            $repassword = trim($repassword);
        }
        if(isset($repassword)){
            if ($password != $repassword) {
                $errores["repassword"]="Las contraseñas no coinciden";
            }
        }

        return $errores;
    }

    public function validacionLogin($usuario){
        $errores=array();
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido!";
        }

        $password= trim($usuario->getPassword());

        if(empty($password)){
            $errores["password"]= "El campo password no puede quedar en blanco";
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener al menos 6 caracteres";
        }

        return $errores;
    }


    public function validacionAvatar($avatar){
        if($usuario->getAvatar()!=null){
            if ($_FILES["avatar"]["error"]!=0){
                $errores["avatar"]="Debe subir una Imagen";                
            }else{
                $nombre = $_FILES["avatar"]["name"];
                $ext = pathinfo ($nombre, PATHINFO_EXTENSION);
                if ($ext !="png" && $ext != "jpg"){
                    $errores["avatar"]="La imagen debe ser un archivo PNG o JPG";
                }
            }
        }
        return $errores;
    }

    public function validacionOlvide($usuario){
        
        $errores=array();
        
        $email = trim($usuario->getEmail());
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores["email"]="Email invalido !!!!!";
        }
        
        $password= trim($usuario->getPassword());
        
        $repassword = trim($usuario->getRepassword());
        

        if(empty($password)){
            $errores["password"]= "El campo Password no puede quedar vacio.";
            
        }elseif (strlen($password)<6) {
            $errores["password"]="La contraseña debe tener al menos 6 caracteres";
        }
        
        if(empty($repassword)){
            $errores["repassword"]= "El campo confirmar contraseña no puede quedar vacio";
        }
        
        return $errores;
    }


  }
 ?>
