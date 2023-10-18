<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <?php
    if(isset($_GET['idAct'])){
        $id = $_GET['idAct'];

        $registro = loginController::obtenerRegistro($id);
    }

    error_reporting(0);
    session_start();

    if($_SESSION['sesionIniciada'] == true){

    ?>

    <section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Actualizar
            </h1>
        </div>
    </div>
    </section>

    <div class="d-flex justify-content-center text-center pt-3">
        <form action="" method="POST" class="p-5 bg-light">
            <div class="form-group">
                <label for="" class="text-body">Nombre</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" value="<?php echo $registro['nombre'] ?>" placeholder="Nombre" name="nombreU" class="form-control" required>
                </div>
            </div><br>

            <div class="form-group">
                <label for="" class="text-body">Apellido</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" value="<?php echo $registro['apellidos'] ?>" placeholder="Apellido" name="apellidoU" class="form-control" required>
                </div>
            </div><br>

            <div class="form-group">
                <label for="" class="text-body">Correo</label>
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="email" value="<?php echo $registro['correo'] ?>" placeholder="Correo" name="correoU" class="form-control" required>
                </div>
            </div><br>

            <button type="submit" class="btn btn-primary" name="actualizar">Actualizar registro</button><br><br>

            <?php
            if(isset($_POST['actualizar'])) {
                // Aquí verificamos si el formulario se ha enviado
                $respuesta = loginController::actualizarRegistro($id);
                if($respuesta){
                    header('location: index.php?pagina=registros');
                }
            }
            ?>
        </form>
    </div>
    <?php
    }else{
        ?>
        <div class="d-flex justify-content-center text-center pt-3">
            <h3 class="text-body">No has iniciado sesion</h3>
        </div>
        <?php
    }
    ?>
</body>
</html>