            <!-- Page header -->
            <div class="full-box page-header">
			    <h3 class="text-center">
			        <i class="fas fa-search fa-fw"></i> &nbsp; <strong>BUSCAR HORARIO POR FECHA</strong>
			    </h3>
			    <p class="text-justify">
			        Este formulario se aplica al submenú "Horarios" y le permitirá realizar una búsqueda por fecha, así como eliminar el criterio de búsqueda, mostrando los resultados en una tabla que le permitirá otras acciones que podrá realizar con los datos que han sido registrados.
			    </p>
			</div>

			<div class="container-fluid">
				<form class="form-neon" action="">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="busqueda_inicio_prestamo" >FECHA INICIAL</label>
									<input type="date" class="form-control" name="busqueda_inicio_prestamo" id="busqueda_inicio_prestamo" maxlength="30">
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="busqueda_final_prestamo" >FECHA FINAL</label>
									<input type="date" class="form-control" name="busqueda_final_prestamo" id="busqueda_final_prestamo" maxlength="30">
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
					<input type="hidden" name="eliminar_busqueda_prestamo" value="eliminar">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-6">
								<p class="text-center" style="font-size: 20px;">
									Fecha de busqueda: <strong>01/01/2020 &nbsp; a &nbsp; 01/01/2020</strong>
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
								<th>DOCENTE</th>
								<th>FECHA DE SOLICITUD</th>
								<th>FECHA DE ENTRADA</th>
								<th>TIPO</th>
								<th>ESTADO</th>
								<th>REPORTE</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>

							<tr class="text-center" >
								<td>1</td>
								<td>HERMELINDA</td>
								<td>05/06/2023</td>
								<td>05/06/2023</td>
								<td><span class="badge badge-dark">Finalizado</span></td>
								<td><span class="badge badge-primary">Cancelado</span></td>
								<td>
									<a href="#" class="btn btn-info">
											<i class="fas fa-file-pdf"></i>	
									</a>
								</td>
								<td>
									<a href="<?php echo SERVERURL; ?>Horario-actualizar/" class="btn btn-success">
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
								<td>MARITZA</td>
								<td>05/06/2023</td>
								<td>05/06/2023</td>
								<td><span class="badge badge-info">Solicitud</span></td>
								<td><span class="badge badge-danger">Pendiente</span></td>
								<td>
									<a href="#" class="btn btn-info">
											<i class="fas fa-file-pdf"></i>	
									</a>
								</td>
								<td>
									<a href="<?php echo SERVERURL; ?>Horario-actualizar/" class="btn btn-success">
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