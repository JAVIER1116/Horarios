			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-center">
					<i class="fas fa-search fa-fw"></i> &nbsp; <strong>BUSCAR DOCENTE</strong>
				</h3>
				<p class="text-justify">
					Este formulario se aplica al submenú "Docentes" y le permitirá realizar una búsqueda por nombre, así como eliminar el criterio de búsqueda, mostrando los resultados en una tabla que le permitirá otras acciones que podrá realizar con los datos que han sido registrados.
				</p>
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form class="form-neon" action="">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-8">
								<div class="form-group">
									<label for="inputSearch" class="bmd-label-floating">¿Qué docente estas buscando?</label>
									<input type="text" class="form-control" name="busqueda-" id="inputSearch" maxlength="30">
								</div>
							</div>
							<div class="col-4">
								<p class="text-center" style="margin-top: 40px;">
									<button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>
			
			<div class="container-fluid">
				<form action="">
					<input type="hidden" name="eliminar-busqueda" value="eliminar">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-6">
								<p class="text-center" style="font-size: 20px;">
									 <strong>“Resultados de la busqueda”</strong>
								</p>
							</div>
							<div class="col-12">
								<p class="text-center" style="margin-top: 20px;">
									<button type="submit" class="btn btn-raised btn-danger"><i class="far fa-trash-alt"></i> &nbsp; ELIMINAR BÚSQUEDA</button>
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>

			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>N°</th>
								<th>NOMBRES</th>
								<th>APELLIDOS</th>
								<th>EMAIL</th>
								<th>HABILITACIÓN</th>
								<th>PERIODO</th>

								<th>DNI</th>
								<th>TELÉFONO</th>
								<th>DIRECCIÓN</th>


								<th>TURNO</th>
								<th>HORA</th>
								<th>DÍA</th>
								<th>GRADO</th>
								<th>SECCIÓN</th>
								<th>ASIGNATURA</th>

								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center" >
								<td>1</td>
								<td>MARITZA</td>
								<td>COBEÑAS CHERO</td>
								<td>
									<button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Correo electrónico" data-content="maritzacc@gmail.com">
										<i class="fas fa-info-circle"></i>
									</button>
								</td>								
								<td>HABILITADO</td>
							    <td>MARZO-DICIEMBRE</td>

								<td>02852062</td>
							    <td>947849170</td>							    
								<td>
									<button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="PIURA" data-content="PIURA">
										<i class="fas fa-info-circle"></i>
									</button>
								</td>

								<td>MAÑANA</td>
							    <td>7:30 am - 13:00 p.m</td>
								<td>LUNES</td>
							    <td>PRIMERO</td>	
							    <td>"A"</td>
							    <td>COMUNICACIÓN</td>							    								
								<td>
									<a href="<?php echo SERVERURL; ?>Docente-actualizar/" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
		  									<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>

							<tr class="text-center" >
								<td>2</td>
								<td>HERMELINDA</td>
								<td>FLORES SANCHES</td>
								<td>
									<button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Correo electrónico" data-content="hermelindafloress@gmail.com">
										<i class="fas fa-info-circle"></i>
									</button>
								</td>								
								<td>HABILITADO</td>
							    <td>MARZO-DICIEMBRE</td>

								<td>03358861</td>
							    <td>944869739</td>							    
								<td>
									<button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="SULLANA" data-content="PIURA">
										<i class="fas fa-info-circle"></i>
									</button>
								</td>
								
								<td>MAÑANA</td>
							    <td>7:30 am - 13:00 p.m</td>
								<td>MARTES</td>
							    <td>PRIMERO</td>	
							    <td>"B"</td>
							    <td>MATEMÁTICA</td>							    								
								<td>
									<a href="<?php echo SERVERURL; ?>Docente-actualizar/" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
		  									<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">ANTERIOR</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">SIGUIENTE</a>
						</li>
					</ul>
				</nav>
			</div>