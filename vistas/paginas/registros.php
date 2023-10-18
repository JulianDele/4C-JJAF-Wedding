<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon img-->
   <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
   <!--Bootstarp min css-->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!--Bootstarp map css-->
   <link rel="stylesheet" href="assets/css/bootstrap.css.map">
   <!--Owl Carousel css-->
   <link rel="stylesheet" href="assets/css/owl.min.css">
   <!--Owl Carousel Theme css-->
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!--All min css-->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!--Magnific popup css-->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!--Swiper min css-->
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <!--main css-->
   <link rel="stylesheet" href="assets/css/main.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>CRUD</title>
</head>
<body>
    

    <?php
    error_reporting(0);
    session_start();

    if($_SESSION['sesionIniciada'] == true){

    ?>
        
        <div class="container">
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
                        $registros = loginController::obtenerRegistros();

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
        </div>


    
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