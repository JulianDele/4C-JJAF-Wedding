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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>
<body>
    <section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                Iniciar sesión
            </h1>
        </div>
    </div>
    </section>

   
  
    




    <div class="d-flex justify-content-center text-center">

        <!-- CONTENEDOR LOGIN -->
        <form class="p-5 bg-light" method="POST">
            <div class="form-group">
                
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="correo" placeholder="Correo electronico" name="correo" class="form-control">
                </div>
            </div>

            <div class="form-group">
                
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                    <input type="contraseña" placeholder="Contraseña de usuario" name="contraseña" class="form-control">
                </div>
            </div><br>

            <button type="submit" class="btn btn-primary" name="btnEnviar">Iniciar sesión</button><br>
            
            <?php
            if(isset($_POST['btnEnviar'])){

                $iniciar = loginController::iniciarSesion();
            }
            ?>
        </form>
    </div>
</body>
</html>