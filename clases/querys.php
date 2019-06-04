<?php
class querys{

  static public function listado($pdo,$tabla){
        $sql="select $tabla.id, $tabla.name, $tabla.email from $tabla";
        $consulta= $pdo->query($sql);
        $listado=$consulta->fetchall(PDO::FETCH_ASSOC);
        return $listado;
    }

    static public function mostrarUsuario($pdo,$tabla,$idUsuario){
        $sql = "select $tabla.id, $tabla.name, $tabla.email, $tabla.avatar,$tabla.role from $tabla where $tabla.id = '$idUsuario'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $usuarioEncontrado=$query->fetchAll(PDO::FETCH_ASSOC);
        return $usuarioEncontrado;
    }

    static public function borrarUsuario($pdo,$tabla,$idUsuario){
        $sql="delete from $tabla where $tabla.id=:id";
        $query=$pdo->prepare($sql);
        $query->bindValue(':id',$idUsuario);
        $query->execute();
    }

    static public function usuarioModificar($pdo,$tabla,$idUsuario){
        $sql = "select $tabla.id, $tabla.name, $tabla.email, $tabla.role from $tabla where $tabla.id = '$idUsuario'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $usuarioModificar=$query->fetch(PDO::FETCH_ASSOC);
        return $usuarioModificar;
    }
}

 ?>
