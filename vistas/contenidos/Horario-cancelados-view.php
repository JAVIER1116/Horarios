            <!-- Page header -->
            <div class="full-box page-header">
			    <h3 class="text-center">
			        <i class="fas fa-clipboard-list fa-fwfa fa-star-o"></i> &nbsp; <strong>HORARIOS CANCELADOS</strong>
			    </h3>
			    <p class="text-justify">
			        Este formulario se aplica al submenú "Horarios" y muestra una tabla que contienen los datos de los horarios finalizados después de la reservación, permitiendo a través de botones realizar otras acciones si lo considera necesario.
			    </p>
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