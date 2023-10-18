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
    <title>Registro</title>
</head>
<body>
    <?php
    error_reporting(0);
    if(isset($_GET['crear'])){
        $crear = $_GET['crear'];
    }
    ?>
    <section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Registro
            </h1>
        </div>
    </div>
    </section>

    <div class="d-flex justify-content-center text-center">
        <form method="POST" class="p-5 bg-light">
            <div class="form-group">
                
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" placeholder="Nombre" name="nombreR" class="form-control">
                </div>
            </div><br>

            <div class="form-group">
                
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="text" placeholder="Apellido" name="apellidoR" class="form-control">
                </div>
            </div><br>

            <div class="form-group">
                
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="email" placeholder="Correo" name="correoR" class="form-control">
                </div>
            </div><br>

            <div class="form-group">
                
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="password" placeholder="Contraseña" name="contraseñaR" class="form-control">
                </div>
            </div><br>

            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button><br><br>

            <?php
            
            if(isset($_POST['registrar'])){
                $respuesta = loginController::registrar($crear);
            }
            ?>
        </form>
    </div>
    
</body>
</html>