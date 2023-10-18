<?php
error_reporting(0);
session_start();

if($_SESSION['sesionIniciada'] == true){


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="NextGenerationDev">
   <title>Wedding, Wedding Planer & Event HTML Template</title>
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
</head>
<body>

<!--==== Header Section Here ======= -->
<header class="header-section">
   <div class="container">
      <div class="header-wrapper">
         <div class="logo-menu">
            <a href="index.php?pagina=inicio" class="logo">
               <img src="assets/img/logo/logo1.png" alt="img">
            </a>
         </div>
         <div class="header-bar d-lg-none">
            <span></span>
            <span></span>
            <span></span>
         </div>
         <ul class="main-menu">
            <!-- BOTON PARA INICAR O CERRAR SESION DEPENDIENDO SI HAY UNA SESION ACTIVA -->
            <li>
               <?php
               error_reporting(0);
               session_start();
               if($_SESSION['sesionIniciada'] == true){ //SI HAY UNA SESION ACTIVA
               ?>
                  <a href="index.php?accion=cerrarSesion">Logout</a>
               <?php
               }else{ //SI NO HAY UNA SESION ACTIVA
               ?>
                  <a href="index.php?pagina=login">Login</a>
               <?php
               }
               ?>
            </li>

            <!-- BOTON DE REGISTRARSE O VER REGISTROS DEPENDIENDO SI HAY UNA SESION ACTIVA -->
            <li>
               <?php
               if($_SESSION['sesionIniciada'] == true){
               ?>
                  <a href="index.php?pagina=registros">Ver registros</a>
               <?php
               }else{
               ?> 
                  <a href="index.php?pagina=registro">Registrarse</a>
               <?php
               }
               ?>
            </li>
            <li class="active">
               <a href="index.php?pagina=inicio">Home</a>
            </li>
            <li>
               <a href="index.php?pagina=about">About</a>
            </li>
            <li>
               <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?pagina=service">
                        <span>Service</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?pagina=service-single">
                        <span>Service Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="index.php?pagina=story">Our story</a>
            </li>
            <li>
               <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?pagina=event">
                        <span>Our event</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?pagina=gallery">
                        <span>Gallery</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?pagina=error">
                        <span>Error 404</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?pagina=blog">
                        <span>Blog</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?pagina=blog-single">
                        <span>Blog Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="index.php?pagina=contact">Contact</a>
            </li>
        </ul>
      </div>
   </div>
</header>
<!--==== Header Section End ======= -->

<!--==== Scroll-Up Section Here ======= -->
<div class="scroll-up">
   <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
   </svg>
</div>
<!--==== Scroll-Up Section End ======= -->   

<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
   <div class="container">
      <div class="breadcumd__wrapper center">
         <h1 class="left__content">
            our blog
         </h1>
         <ul class="right__content">
            <li>
               <a href="index.php?pagina=inicio">
                  Home
               </a>
            </li>
            <li>
               <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
               blog
            </li>
         </ul>
      </div>
   </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== Blog Section Here ========= -->
<section class="blog__section pt-120 pb-120">
   <div class="left__shape">
      <img src="assets/img/testi/shape-left.png" alt="left__shape">
   </div>
   <div class="container">
      <div class="row g-4">
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="blog__items">
               <div class="blog__thumb">
                  <img src="assets/img/blog/blog1.jpg" alt="blog__image">
               </div>
               <div class="blog__content">
                  <h4>
                     <a href="blog-single.html">top 10 gifts</a>
                  </h4>
                  <p>
                     The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                  </p>
                  <div class="blog-button mt-2">
                     <a href="blog-single.html" class="blog-btn">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="blog__items">
               <div class="blog__thumb">
                  <img src="assets/img/blog/blog2.jpg" alt="blog__image">
               </div>
               <div class="blog__content">
                  <h4>
                     <a href="blog-single.html">Best Photography Idea</a>
                  </h4>
                  <p>
                     The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                  </p>
                  <div class="blog-button mt-2">
                     <a href="blog-single.html" class="blog-btn">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="blog__items">
               <div class="blog__thumb">
                  <img src="assets/img/blog/blog3.jpg" alt="blog__image">
               </div>
               <div class="blog__content">
                  <h4>
                     <a href="blog-single.html">Wedding Flower Collect</a>
                  </h4>
                  <p>
                     The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                  </p>
                  <div class="blog-button mt-2">
                     <a href="blog-single.html" class="blog-btn">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="blog__items">
               <div class="blog__thumb">
                  <img src="assets/img/blog/blog1.jpg" alt="blog__image">
               </div>
               <div class="blog__content">
                  <h4>
                     <a href="blog-single.html">top 10 gifts</a>
                  </h4>
                  <p>
                     The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                  </p>
                  <div class="blog-button mt-2">
                     <a href="blog-single.html" class="blog-btn">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="blog__items">
               <div class="blog__thumb">
                  <img src="assets/img/blog/blog2.jpg" alt="blog__image">
               </div>
               <div class="blog__content">
                  <h4>
                     <a href="blog-single.html">Best Photography Idea</a>
                  </h4>
                  <p>
                     The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                  </p>
                  <div class="blog-button mt-2">
                     <a href="blog-single.html" class="blog-btn">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="blog__items">
               <div class="blog__thumb">
                  <img src="assets/img/blog/blog3.jpg" alt="blog__image">
               </div>
               <div class="blog__content">
                  <h4>
                     <a href="blog-single.html">Wedding Flower Collect</a>
                  </h4>
                  <p>
                     The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                  </p>
                  <div class="blog-button mt-2">
                     <a href="blog-single.html" class="blog-btn">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="blog__items">
               <div class="blog__thumb">
                  <img src="assets/img/blog/blog1.jpg" alt="blog__image">
               </div>
               <div class="blog__content">
                  <h4>
                     <a href="blog-single.html">top 10 gifts</a>
                  </h4>
                  <p>
                     The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                  </p>
                  <div class="blog-button mt-2">
                     <a href="blog-single.html" class="blog-btn">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="blog__items">
               <div class="blog__thumb">
                  <img src="assets/img/blog/blog2.jpg" alt="blog__image">
               </div>
               <div class="blog__content">
                  <h4>
                     <a href="blog-single.html">Best Photography Idea</a>
                  </h4>
                  <p>
                     The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                  </p>
                  <div class="blog-button mt-2">
                     <a href="blog-single.html" class="blog-btn">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
            <div class="blog__items">
               <div class="blog__thumb">
                  <img src="assets/img/blog/blog3.jpg" alt="blog__image">
               </div>
               <div class="blog__content">
                  <h4>
                     <a href="blog-single.html">Wedding Flower Collect</a>
                  </h4>
                  <p>
                     The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It describes the items a bride should have on her wedding day.
                  </p>
                  <div class="blog-button mt-2">
                     <a href="blog-single.html" class="blog-btn">read more</a>
                  </div>
               </div>
            </div>
         </div>
         <ul class="default-pagination">
            <li class="active-one">
                <a href="#"><i class="fa-solid fa-angle-left"></i></a>
            </li>
            <li class="active">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li class="active-one">
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li>
                <a href="#">5</a>
            </li>
            <li class="active-two">
                <a href="#"><i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
      </div>
   </div>
</section>
<!--=========== Blog Section End ========= -->

<!--=========== Footer Section Here ========= -->
<div class="footer__section">
   <div class="container">
      <div class="border__area">
         <div class="container">
            <div class="footer__logo center">
               <a href="index.html">
                  <img src="assets/img/logo/logo.png" alt="footer__logo">
               </a>
            </div>
            <div class="footer__bottom center">
               <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
               <ul class="footer__icon">
                  <li>
                     <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                     <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li class="active">
                     <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                  <li>
                     <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                  </li>
                  <li class="mr-none">
                     <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                  </li>
               </ul>
               <ul class="footer__menu">
                  <li><a href="index.php?pagina=inicio">home</a></li>
                  <li><a href="index.php?pagina=about">about</a></li>
                  <li><a href="index.php?pagina=service">service</a></li>
                  <li><a href="index.php?pagina=story">Story</a></li>
                  <li><a href="index.php?pagina=gallery">gallery</a></li>
                  <li><a href="index.php?pagina=blog">blog</a></li>
                  <li class="mr-none"><a href="index.php?pagina=contact">contact</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!--=========== Footer Section End ========= -->


         
    
   <!--Jquery 3 6 0 Min Js-->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <!--Bootstrap bundle Js-->
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <!--Viewport Jquery Js-->
   <script src="assets/js/viewport.jquery.js"></script>
   <!--Wow min Js-->
   <script src="assets/js/wow.min.js"></script>
   <!--Owl Carousel min Js-->
   <script src="assets/js/owl.min.js"></script>
   <!--Swiper min Js-->
   <script src="assets/js/swiper-bundle.min.js"></script> 
   <!--Magnific popup min Js-->
   <script src="assets/js/jquery.magnific-popup.min.js"></script> 
   <!--main Js-->
   <script src="assets/js/main.js"></script>
</body>
</html>

<?php
}else{
?>
   <div class="justify-content-center text-center pt-3">
      <h3 class="text-body">No has iniciado sesion</h3>

      <a href="index.php?pagina=login"><button type="submit" class="btn btn-primary" name="btnEnviar">Iniciar sesión</button><br></a>
   </div>
<?php
}