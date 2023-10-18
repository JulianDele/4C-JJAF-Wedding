<?php

require_once('conexion.php');

class modelLogin{
    static public function iniciarSesion($correo, $tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE correo = :correo");

        $stmt -> bindParam(':correo', $correo, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetch();
    }


    static public function obtenerRegistros($tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");

        $stmt -> execute();

        return $stmt -> fetchAll();
    }


    static public function registrar($datos, $tabla){
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(nombre, apellidos, correo, contraseña) VALUES (:nombre, :apellidos, :correo, :contraseña)");
        
        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":apellidos", $datos["apellido"], PDO::PARAM_STR);
        $stmt -> bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt -> bindParam(":contraseña", $datos["contraseña"], PDO::PARAM_STR);

        if($stmt -> execute()){
            return "ok";
        }
    }


    static public function eliminarRegistro($id, $tabla){
        $stmt = Conexion::conectar() -> prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);

        if($stmt -> execute()){
            header('location: index.php?pagina=registros');
            return $stmt -> fetchAll();
        }

        
    }


    static public function obtenerRegistro($id, $tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE id = :id");

        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);

        if($stmt -> execute()){
            return $stmt -> fetch();
        }
    }


    static public function actualizarRegistro($id, $datos, $tabla){
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET nombre = :nombre, apellidos = :apellidos, correo = :correo WHERE id = :id");

        $stmt -> bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt -> bindParam(":apellidos", $datos['apellidos'], PDO::PARAM_STR);
        $stmt -> bindParam(":correo", $datos['correo'], PDO::PARAM_STR);
        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);

        if($stmt -> execute()){
            header('location: index.php?pagina=registros');
            return $stmt;
        }
    }


    static public function buscarRegistros($parametro, $tabla){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla WHERE nombre = :nombre OR apellidos = :apellidos OR correo = :correo");
        
        $stmt -> bindParam(":nombre", $parametro, PDO::PARAM_STR);
        $stmt -> bindParam(":apellidos", $parametro, PDO::PARAM_STR);
        $stmt -> bindParam(":correo", $parametro, PDO::PARAM_STR);

        $stmt -> execute();

        return $stmt -> fetchAll();
    }
}