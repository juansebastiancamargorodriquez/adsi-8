<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">


			<?php

			foreach ($_SESSION["perfiles"] as $key => $value){

		// Administrador : puede ver y hacer los cambios que el desee en el programa ;			

			if($value["perfil"]==''){ 		

					echo '<li class="treeview">
								<li>
									<a href="control">
										<i class="fa fa-home"></i>
											<span>INICIO</span>
									</a>	
								</li>
									<li>
										<a href="usuarios">
											<i class="fa fa-address-book"></i>
												<span>USUARIOS</span>
										</a>	
									</li>																			
											
									<li>
										<a href="personal">
											<i class="fa fa-calendar-plus-o"></i>
											<span>SEGUIMIENTO COVID</span>
										</a>
									</li>
							<li>
										<a href="control">
											<i class="fa fa-key"></i>
											<span>REGISTRO COVID</span>
										</a>
									</li>
									<li>
												<a href="tecnologia">
													<i class="fa fa-newspaper-o"></i>
														<span>REPORTE DE SINTOMAS</span>
												</a>
									</li>
									
											
						</li>';
				}

		// Tecnologia : vistas activos fijos en el area de tecnologia ;
	 
				if($value["perfil"]=='Tecnologia'){ ?>

				<li class="treeview">
								<li>
									<a href="inicio">
										<i class="fa fa-address-book"></i>
											<span>INICIO</span>
									</a>
								</li>
									 <li>
								 		<a href="tecnologia">
											<i class="fa fa-newspaper-o"></i>
												<span>REPORTE DE SINTOMAS</spam>
										</a>				
									</li>
										<li>
										<a href="control">
											<i class="fa fa-key"></i>
											<span>REGISTRO COVID</span>
										</a>
									</li>
									<li>
										<a href="personal">
											<i class="fa fa-calendar-plus-o"></i>
											<span>REGISTRO COVID</span>
										</a>
									</li>
				</li>
				
				<?php 
				}

			// Administrativo : Activos fijos relacionados al area administrativa ;
				
				if($value["perfil"]=='Administrativo'){ ?>

				<li class="treeview">
								<li>
									<a href="inicio">
										<i class="fa fa-address-book"></i>
											<span>INICIO</span>
									</a>
								</li>
									<li>
										<a href="tecnologia" >
											<i class="fa fa-newspaper-o"></i>
												<span>REPORTE DE SINTOMAS</spam>
										</a>		
									</li>
										<li>
										<a href="control">
											<i class="fa fa-key"></i>
											<span>REGISTRO COVID</span>
										</a>
									</li>
									<li>
										<a href="personal">
											<i class="fa fa-calendar-plus-o"></i>
											<span>REGISTRO COVID</span>
										</a>
									</li>
				</li>
				<?php
				}

		// Consulta : solo puede ver pero no modificar ningun archivo o datos del programa ;

				if($value["perfil"]=='Consulta'){			
				 
					echo '<li class="treeview">
								<li>
									<a href="inicio">
										<i class="fa fa-home"></i>
										<span>INICIO</span>
									</a>
								</li>
									<li>
											<a href="consultatec">
												<i class="fa fa-archive"></i>
													<span>REPORTE DE SINTOMAS</spam>
											</a>				

									</li>
							</li>';
				}
				
	        }
        	?>

			
		</ul>

	 </section>

</aside>