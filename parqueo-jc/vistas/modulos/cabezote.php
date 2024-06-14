 <header class="main-header">
 	
	<!--=====================================
	LOGOTIPO
	======================================-->
	<a href="inicio" class="logo" style="padding-bottom: 6%;background-color:#000000;border-bottom: 2px solid #e3aa00;">
		
		<!-- logo mini -->
		<span class="logo-mini" style="padding-bottom: 0%;">
			
			<img src="vistas/img/plantilla/logo11.png" class="img-responsive" style="padding: 8px;margin-top: 15%;">

		</span>

		<!-- logo normal -->

		<span class="logo-lg" style="padding-bottom: 6%;">
			
			<img src="vistas/img/plantilla/logo_final_2.png"  style="display: block;max-width: 88%;height: auto;margin-top: 1%;">

		</span>

	</a>

	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" role="navigation" style="background-color: #000000;border-bottom: 2px solid #e3aa00;border-left: 2px solid #e3aa00">
		
		<!-- Botón de navegación -->

	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        	
        	<span class="sr-only">Toggle navigation</span>
      	
      	</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">
				
			<ul class="nav navbar-nav">
				
				<li class="dropdown user user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-top: 10%;zoom: 113%;">

					<?php

					if($_SESSION["foto"] != ""){

						echo '<img src="'.$_SESSION["foto"].'" class="user-image">';

					}else{


						echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';

					}


					?>
						
						<span class="hidden-xs"><?php  echo $_SESSION["nombre"]; ?></span>

					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">
						
						<li class="user-body">
							
							<div class="pull-right">
								
								<a href="salir" class="btn btn-default btn-flat">Salir</a>

							</div>

						</li>

					</ul>

				</li>

			</ul>

		</div>

	</nav>

 </header>