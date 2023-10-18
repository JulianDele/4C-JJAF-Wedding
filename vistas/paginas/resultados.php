<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>
<body>
    <?php
    if(isset($_POST['parametro'])){
        $parametro = $_POST['parametro'];

        $registros = loginController::buscarRegistros($parametro);
    }
    ?>

    <?php
    error_reporting(0);
    session_start();

    if($_SESSION['sesionIniciada'] == true){

    ?>
    <main>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark d-flex justify-content-around">
            <form class="form-inline d-flex justify-content-around" action="index.php?pagina=resultados">
                <input class="form-control mr-sm-2" type="text" name="parametro" placeholder="Buscar registro...">
                <button class="btn btn-success" name="buscar" type="submit">Buscar</button>
            </form>

            <a href="index.php?pagina=registro&crear=true"><button type="button" class="btn btn-success">Crear registro</button></a>

            <a href="index.php?pagina=registros"><button type="button" class="btn btn-success">Registros</button></a>

            <a href="index.php?pagina=inicio"><button type="button" class="btn btn-success">Inicio</button></a>
        </nav>

        <div class="container">
            <?php
            if(!empty($registros)){
            ?>
            <section>
                <table class="table table-striped">
                    <thead>        
                        <tr>
                            <th>No.</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Email</th>
                            <th>Ingreso</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        <?php
                        foreach($registros as $key => $values){
                        ?>

                        <tr>
                            <td><?php echo $key+1; ?></td>
                            
                            <td><?php echo $values['nombre']; ?></td>
                            <td><?php echo $values['apellidos']; ?></td>
                            <td><?php echo $values['correo']; ?></td>
                            <td><?php echo $values['fecha_ingreso']; ?></td>
                            <td><a href="index.php?pagina=actualizar&idAct=<?php echo $values['id']; ?>"><button class="btn btn-warning"><i class='bx bxs-edit'></i></button></a></td>
                            <td><a href="index.php?accion=eliminar&id=<?php echo $values['id']; ?>"><button class="btn btn-danger"><i class='bx bxs-trash'></i></button></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </section>
            <?php
            }else{
            ?>
            <div class="container">
                <h1>No se encontraron resultados</h1>
            </div>
            <?php
            }
            ?>
        </div>
    </main>
    <?php
    }else{
        ?>
        <div class="justify-content-center text-center pt-3">
            <h3 class="text-body">No has iniciado sesion</h3>

            <a href="index.php?pagina=login"><button type="submit" class="btn btn-primary" name="btnEnviar">Iniciar sesión</button><br></a>
        </div>
        <?php
    }
    ?>
</body>
</html>