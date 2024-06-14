<aside class="main-sidebar" style="position: absolute;top: 0;left: 0;width: 232px;padding-top: 78px;min-height: 100%;background-color: #000000;border-right: 2px solid #e3aa00;">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>

				<a href="categorias">

					<i class="fa fa-money"></i>
					<span>Tarifas</span>

				</a>

			</li>

			<li>

				<a href="productos">

					<i class="fa fa-indent"></i>
					<span>Ingresos</span>

				</a>

			</li>
			<li>

				<a href="salidas">

					<i class="fa fa-sign-out"></i>
					<span>Salidas</span>

				</a>

			</li>
			
			';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>Abonados</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '
					<li>

						<a href="cajas">
							
							<i class="fa fa-cart-plus"></i>
							<span>Caja</span>

						</a>

					</li>

					<li>

						<a href="crear-venta">
							
							<i class="fa fa-usd"></i>
							<span>Pagos</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes">
							
							<i class="fa fa-line-chart"></i>
							<span>Reporte de ventas</span>

						</a>

					</li>';

					}

				

				echo '

			</li>';

		}

		?>

		</ul>

	 </section>

</aside>