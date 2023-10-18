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
   
</head>
<body>
    
</body>
</html>


<?php

/** LISTA BLANCA */

/** Controla el redireccionamiento de paginas mediante GET */
if(isset($_GET['accion'])){
    if($_GET['accion'] == 'cerrarSesion'){
        loginController::cerrarSesion();
        
    }else if($_GET['accion'] == 'eliminar'){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        loginController::eliminarRegistro($id);
    }
}else if(isset($_GET['pagina'])){
    if($_GET['pagina'] == 'inicio' ||
        $_GET['pagina'] == 'registros' ||
        $_GET['pagina'] == 'login' ||
        $_GET['pagina'] == 'registro' ||
        $_GET['pagina'] == 'actualizar' ||
        $_GET['pagina'] == 'resultados' ||
        $_GET['pagina'] == 'about' ||
        $_GET['pagina'] == 'service' ||
        $_GET['pagina'] == 'service-single' ||
        $_GET['pagina'] == 'story' ||
        $_GET['pagina'] == 'event' ||
        $_GET['pagina'] == 'gallery' ||
        $_GET['pagina'] == 'error' ||
        $_GET['pagina'] == 'blog' ||
        $_GET['pagina'] == 'blog-single' ||
        $_GET['pagina'] == 'contact'){
        include "paginas/".$_GET["pagina"].".php";
    }else{
        include "paginas/error.php";
    }
}else{
    #Modularizar
    #Se estandariza que sea la pagina principal
    include "paginas/inicio.php";
}