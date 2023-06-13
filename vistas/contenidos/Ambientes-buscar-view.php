            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-center">
                    <i class="fas fa-search fa-fw"></i> &nbsp; <strong>BUSCAR AMBIENTE</strong>
                </h3>
                <p class="text-justify">
                    Este formulario se aplica al submenú "Ambientes" y le permitirá realizar una búsqueda por ambiente, así como eliminar el criterio de búsqueda, mostrando los resultados en una tabla que le permitirá otras acciones que podrá realizar con los datos que han sido registrados.
                </p>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
                <form class="form-neon" action="">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-md-10">
                                <div class="form-group">
                                    <label for="inputSearch" class="bmd-label-floating">¿Qué Ambiente estás buscando?</label>
                                    <input type="text" class="form-control" name="busqueda-" id="inputSearch" maxlength="30">
                                </div>
                            </div>
                            <div class="col-2">
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
                                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Aula de Innovación pedagógica N° 01" data-content="Este ambiente cuenta con 19 máquinas operativas que incluye la máquina del docente ">
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