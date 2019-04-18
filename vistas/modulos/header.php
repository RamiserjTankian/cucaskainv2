<body class="seo_version">

	<!-- LOADER -->
	<div id="preloader">
		<div class="loader-wrapper">
			<div class="loader-new">
				<div class="ball"></div>
				<div class="ball"></div>
				<div class="ball"></div>
			</div>
			<div class="text">Cargando...</div>
		</div>
	</div>
    
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="inicio">
                <span style="color: #FF7300;"><img src="vistas/images/logo-cucas-kain.png" alt="SVG" width="70" height="70"></i> <span style="font-size: 1.33em;">Cucas Kain</span></span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-seo" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-seo">
					<ul class="navbar-nav ml-auto">
					<?php
                         if (isset($_GET["ruta"]) == "") {
                             echo'  
													<li class="nav-item active"><a class="nav-link" href="inicio">Inicio</a></li>
													<li class="nav-item"><a class="nav-link" href="nosotros">Nosotros</a></li>
													<li class="nav-item"><a class="nav-link" href="servicios">Servicios</a></li>
													<li class="nav-item"><a class="nav-link" href="plagas">Plagas</a></li>
													<li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>';
                         } elseif ($_GET["ruta"] == "inicio") {
                             echo'       
                          	<li class="nav-item active"><a class="nav-link" href="inicio">Inicio</a></li>
														<li class="nav-item"><a class="nav-link" href="nosotros">Nosotros</a></li>
														<li class="nav-item"><a class="nav-link" href="servicios">Servicios</a></li>
														<li class="nav-item"><a class="nav-link" href="plagas">Plagas</a></li>
														<li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>';
                         } elseif ($_GET["ruta"] == "nosotros") {
													echo'       
													<li class="nav-item"><a class="nav-link" href="inicio">Inicio</a></li>
													<li class="nav-item active"><a class="nav-link" href="nosotros">Nosotros</a></li>
													<li class="nav-item"><a class="nav-link" href="servicios">Servicios</a></li>
													<li class="nav-item"><a class="nav-link" href="plagas">Plagas</a></li>
													<li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>';
                         } elseif ($_GET["ruta"] == "plagas") {
													echo'       
													<li class="nav-item"><a class="nav-link" href="inicio">Inicio</a></li>
													<li class="nav-item"><a class="nav-link" href="nosotros">Nosotros</a></li>
													<li class="nav-item"><a class="nav-link" href="servicios">Servicios</a></li>
													<li class="nav-item active"><a class="nav-link" href="plagas">Plagas</a></li>
													<li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>';
                         } elseif ($_GET["ruta"] == "servicios") {
													echo'       
													<li class="nav-item "><a class="nav-link" href="inicio">Inicio</a></li>
													<li class="nav-item"><a class="nav-link" href="nosotros">Nosotros</a></li>
													<li class="nav-item active"><a class="nav-link" href="servicios">Servicios</a></li>
													<li class="nav-item"><a class="nav-link" href="plagas">Plagas</a></li>
													<li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>';
                         } elseif ($_GET["ruta"] == "contacto") {
													echo'       
													<li class="nav-item"><a class="nav-link" href="inicio">Inicio</a></li>
													<li class="nav-item"><a class="nav-link" href="nosotros">Nosotros</a></li>
													<li class="nav-item"><a class="nav-link" href="servicios">Servicios</a></li>
													<li class="nav-item"><a class="nav-link" href="plagas">Plagas</a></li>
													<li class="nav-item active"><a class="nav-link" href="contacto">Contacto</a></li>';
                         } elseif ($_GET["ruta"] == "404") {
													echo'       
													<li class="nav-item active"><a class="nav-link" href="inicio">Inicio</a></li>
													<li class="nav-item"><a class="nav-link" href="nosotros">Nosotros</a></li>
													<li class="nav-item"><a class="nav-link" href="servicios">Servicios</a></li>
													<li class="nav-item"><a class="nav-link" href="plagas">Plagas</a></li>
													<li class="nav-item"><a class="nav-link" href="contacto">Contacto</a></li>';
                         }

                        ?>
					
					</ul>
				</div>
			</div>
		</nav>
	</header>