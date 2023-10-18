<?php
class loginController{
    static public function iniciarSesion(){   if(isset($_POST['correo']) && isset($_POST['contraseña'])){
            $correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];
            $tabla = 'tabla';
  $respuesta = modelLogin::iniciarSesion($correo, $tabla);
if(is_array($respuesta) && $respuesta['correo'] == $correo && $respuesta['contraseña'] == $contraseña){
                session_start();

             $_SESSION['sesionIniciada'] = true;
                header('location: index.php?pagina=inicio');
            }else{
echo'<div class="alert alert-danger">Hay un problema con el email o contraseña lol</div>';
            }
            return $respuesta;
        }
    }


    static public function cerrarSesion(){
        session_start();

        session_unset();

        session_destroy();

        header("location: http://localhost/MVC_T/"); 
        exit();
    }
    static public function obtenerRegistros(){
        $tabla = 'tabla';

        $respuesta = modelLogin::obtenerRegistros($tabla);

        return $respuesta;
    }


    static public function registrar($crear){
        if(isset($_POST['registrar'])){
            
     if(preg_match('/^[a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["nombreR"]) &&
     preg_match('/^[a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["apellidoR"])){
 $datos = array("nombre" => $_POST['nombreR'],

                                "apellido" => $_POST['apellidoR'],

                                "correo" => $_POST['correoR'],

                                "contraseña" => $_POST['contraseñaR']
                                );
                                
                $tabla = 'tabla';

                $respuesta = modelLogin::registrar($datos, $tabla);

                if($respuesta == "ok"){

                    if($crear == true){

                        header('location: index.php?pagina=registros');
                    }else{ 
                        header('location: index.php?pagina=inicio');
                    }
                }
                return $respuesta;
            }else{
                echo'<div class="alert alert-danger">Hay un error en la redacción lol</div>';
            }
        }
    }


    static public function eliminarRegistro($id){

        $tabla = 'tabla';
        $respuesta = modelLogin::eliminarRegistro($id, $tabla);

        return $respuesta;
    }


    static public function obtenerRegistro($id){
        $tabla = 'tabla';

        $respuesta = modelLogin::obtenerRegistro($id, $tabla);

        return $respuesta;
    }


    static public function actualizarRegistro($id){
        
        if(isset($_POST['actualizar'])){
            
            $tabla = 'tabla';       if(preg_match('/^[a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["nombreU"]) &&
            preg_match('/^[a-zA-Z-ñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["apellidoU"])){

                $datos = array("nombre" => $_POST['nombreU'],
                                "apellidos" => $_POST['apellidoU'],
                                "correo" => $_POST['correoU']);
                             
                $tabla = 'tabla';

             $respuesta = modelLogin::actualizarRegistro($id, $datos, $tabla);

                return $respuesta;
            
            }else{
                echo'<div class="alert alert-danger">Error en los caracteres</div>';
            }
        }
    }


    static public function buscarRegistros($parametro){
      $tabla = 'tabla';

        $respuesta = modelLogin::buscarRegistros($parametro, $tabla);

        return $respuesta;
    }
}