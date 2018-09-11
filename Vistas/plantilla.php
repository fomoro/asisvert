<!DOCTYPE html>
<html lang="en">

<head>
    <title>Asisvert</title>

    <!-- Meta -->
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="Vistas/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="Vistas/assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="Vistas/assets/css/headers/header-v1.css">
	<link rel="stylesheet" href="Vistas/assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="Vistas/assets/plugins/animate.css">
	<link rel="stylesheet" href="Vistas/assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="Vistas/assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="Vistas/assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="Vistas/assets/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
    

	<link rel="stylesheet" href="Vistas/assets/plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="Vistas/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

	<link rel="stylesheet" href="Vistas/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="Vistas/assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
    
    
	<!-- CSS Page Style -->
	<link rel="stylesheet" href="Vistas/assets/css/pages/page_about.css">	
	<link rel="stylesheet" href="Vistas/assets/css/pages/page_contact.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="Vistas/assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="Vistas/assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="Vistas/assets/css/custom.css">
</head>

<body>
    <div class="wrapper">
        <!--=== Header ===-->
        <?php 
        	include "Modulos/Comunes/menu.php";
        ?>
        <!--=== End Header ===-->

        <?php     
        /*=============================================
        CONTENIDO
        =============================================*/

        if(isset($_GET["ruta"])){

        if($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "nosotros" ||
            $_GET["ruta"] == "politicas" ||
            $_GET["ruta"] == "mantenimiento" ||            
            $_GET["ruta"] == "conocenos"){

            include "modulos/".$_GET["ruta"].".php";
        }else{
            include "modulos/404.php";
        }
        }else{
            include "modulos/inicio.php";
        }            
        ?>


        <!--=== Footer Version 1 ===-->
        <?php 
        	include "Modulos/Comunes/footer.php";
        ?>
        <!--=== End Footer Version 1 ===-->
    </div>
    <!--/wrapper-->
    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="Vistas/assets/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="Vistas/assets/plugins/jquery/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="Vistas/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="Vistas/assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="Vistas/assets/plugins/smoothScroll.js"></script>
    <script type="text/javascript" src="Vistas/assets/plugins/jquery.parallax.js"></script>
    <script type="text/javascript" src="Vistas/assets/plugins/parallax-slider/js/modernizr.js"></script>
    <script type="text/javascript" src="Vistas/assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
    <script type="text/javascript" src="Vistas/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="Vistas/assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script type="text/javascript" src="Vistas/assets/plugins/counter/waypoints.min.js"></script>
	<script type="text/javascript" src="Vistas/assets/plugins/counter/jquery.counterup.min.js"></script>
	
    <!-- JS Customization -->
    <script type="text/javascript" src="Vistas/assets/js/custom.js"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="Vistas/assets/js/app.js"></script>
    <script type="text/javascript" src="Vistas/assets/js/plugins/owl-carousel.js"></script>
    <script type="text/javascript" src="Vistas/assets/js/plugins/style-switcher.js"></script>
    <script type="text/javascript" src="Vistas/assets/js/plugins/parallax-slider.js"></script>
    <script type="text/javascript" src="Vistas/assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>    

</body>

</html>