            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-center">
                    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; <strong>LISTA DE AMBIENTES</strong>
                </h3>
                <p class="text-justify">
                    Este formulario se aplica al submenú "Ambientes" y muestra una tabla que contienen los datos de los ambientes registrados, permitiendo a través de botones realizar otras acciones si lo considera necesario.
                </p>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>N°</th>
								<th>CÓDIGO</th>
								<th>NOMBRE</th>
                                <th>DETALLE</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center" >
								<td>1</td>
								<td>AIP001</td>
								<td>Ambiente AIP N° 01</td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Aula de Innovación pedagógica N° 01" data-content="Este ambiente cuenta con 19 máquinas operativas que incluye la máquina del docente">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </td>
								<td>
                                    <a href="<?php echo SERVERURL; ?>Ambientes-actualizar/" class="btn btn-success">
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
								<td>AIP002</td>
								<td>Ambiente AIP N° 02</td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Aula de Innovación pedagógica N° 02" data-content="Este ambiente cuenta con 28 máquinas operativas que incluye la máquina del docente">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </td>
								<td>
                                    <a href="<?php echo SERVERURL; ?>Ambientes-actualizar/" class="btn btn-success">
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
								<td>3</td>
								<td>AIP003</td>
								<td>Ambiente AIP N° 03</td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Sala de Lectura" data-content="Este ambiente cuenta con una sola máquina que proyecto los videos informativos de los docentes">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </td>
								<td>
                                    <a href="<?php echo SERVERURL; ?>Ambientes-actualizar/" class="btn btn-success">
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
