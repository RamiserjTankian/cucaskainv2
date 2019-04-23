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
    <title>¡Bienvenido a Cucas Kain!</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="vistas/images/logo-cucas-kain.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="vistas/images/logo-cucas-kain.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vistas/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="vistas/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="vistas/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="vistas/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="vistas/css/custom.css">
    <link rel="stylesheet" href="vistas/css/icomoon.css">
	<script src="vistas/js/modernizr.custom.79639.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="vistas/js/all.js"></script>
    <!-- ALL PLUGINS -->
	<script src="vistas/js/tippy.all.min.js"></script>
    <script src="vistas/js/custom.js"></script>
	<script src="vistas/js/portfolio.js"></script>
    <script src="vistas/js/hoverdir.js"></script>
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
    CONTENIDO
    =============================================*/

    if ($_GET["ruta"] == "inicio" || //CONDICIONA LA RUTA PARA CREAR LA ESTRUCTURA INCLUYENDO EL HEADER, SEGUIDAMENTE DEL MENU Y CON EL CONTENIDO QUE ES LA RUTA Y AL FINAL EL FOOTER
        $_GET["ruta"] == "contact" ||
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
    include "modulos/inicio.php";
    include "modulos/footer.php";
}

    echo '</div>'; 
    
  ?>
 	<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();
			
			});
		</script>
		
		<script>
			tippy('.btn-a')
        </script>
</body>
</html>