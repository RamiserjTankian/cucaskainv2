<?php
//AL FINALIZAR LA CREACION DEL SITIO SE DEBEN ELIMINAR TODOS LOS COMENTARIOS DE HTML!!!

?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Greatseo - Bootstrap 4 Responsive HTML5 Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vistas/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="vistas/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="vistas/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="vistas/css/custom.css">
	
	<script src="vistas/js/modernizr.custom.79639.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="vistas/js/all.js"></script>
    <!-- ALL PLUGINS -->
	<script src="vistas/js/tippy.all.min.js"></script>
    <script src="vistas/js/custom.js"></script>
	
	<script src="vistas/js/jquery.ba-cond.min.js"></script>
	<script src="vistas/js/jquery.slitslider.js"></script>
</head>
<!--=====================================
CUERPO DOCUMENTO
======================================-->
<?php

if (isset($_GET["ruta"])) {

    /*=============================================
    HEADER
    =============================================*/

    include "modulos/header.php";

    /*=============================================
    MENU
    =============================================*/

    include "modulos/menu.php";

    /*=============================================
    CONTENIDO
    =============================================*/

    if ($_GET["ruta"] == "inicio" || //CONDICIONA LA RUTA PARA CREAR LA ESTRUCTURA INCLUYENDO EL HEADER, SEGUIDAMENTE DEL MENU Y CON EL CONTENIDO QUE ES LA RUTA Y AL FINAL EL FOOTER
        $_GET["ruta"] == "contacto" ||
        $_GET["ruta"] == "nosotros" ||
        $_GET["ruta"] == "plagas" ||
        $_GET["ruta"] == "servicios" ||
        $_GET["ruta"] == "salir") {
        include "modulos/".$_GET["ruta"].".php";
    } else {
       include "modulos/404.php"; // PARA AGREGAR UN ERROR 404 SI LA RUTA NO ES LA QUE SE INDICA ARRIBA
    }
    /*=============================================
    FOOTER
    =============================================*/
    include "modulos/footer.php";
} else { //Si no existe la ruta, incluye directamente la esctructura de la web en la pagina de inicio.
    include "modulos/header.php";
    include "modulos/menu.php";
    include "modulos/inicio.php";
    include "modulos/footer.php";
}

    echo '</div>'; 
    
  ?>
 
</body>
</html>
