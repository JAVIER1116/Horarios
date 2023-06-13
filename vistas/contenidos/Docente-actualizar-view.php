			<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-center">
					<i class="fas fa-sync-alt fa-fw"></i> &nbsp; <strong>ACTUALIZAR DOCENTE</strong>
				</h3>
				<p class="text-justify">
					Esta sección se aplica a la lista de docentes y busqueda de docentes y le permitirá modificar los datos que han sido registrados en relación a los docentes con los que cuenta la Institución Educativa "San Miguel".
				</p>
			</div>
			
			<!-- Content -->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-address-card"></i> &nbsp; Datos Básicos</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_dni" class="bmd-label-floating">NOMBRES</label>
										<input type="text" pattern="[0-9-]{1,27}" class="form-control" name="cliente_dni_reg" id="cliente_dni" maxlength="27">
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_nombre" class="bmd-label-floating">APELLIDOS</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="cliente_nombre_reg" id="cliente_nombre" maxlength="40">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_apellido" class="bmd-label-floating">EMAIL</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="cliente_apellido_reg" id="cliente_apellido" maxlength="40">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">HABILITACIÓN</label>
										<select class="form-control" name="item_estado_reg" id="item_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Habilitado">Habilitado</option>
											<option value="Deshabilitado">Deshabilitado</option>
										</select>
									</div>
								</div>
								 
								 <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="cliente_direccion" class="bmd-label-floating">PERIODO</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="cliente_direccion_reg" id="cliente_direccion" maxlength="150">
									</div>
								</div>

							</div>
						</div>
					</fieldset>
					<br>
					<fieldset>
						<legend><i class="fas fa-user-lock"></i> &nbsp; Datos Personales</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_dni" class="bmd-label-floating">DNI</label>
										<input type="text" pattern="[0-9-]{1,27}" class="form-control" name="cliente_dni_reg" id="cliente_dni" maxlength="27">
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="cliente_telefono" class="bmd-label-floating">TELÉFONO/CELULAR</label>
										<input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="cliente_telefono_reg" id="cliente_telefono" maxlength="20">
									</div>
								</div>



								<div class="col-12 col-md-8">
									<div class="form-group">
										<label for="cliente_direccion" class="bmd-label-floating">DIRECCIÓN</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="cliente_direccion_reg" id="cliente_direccion" maxlength="150">
									</div>
								</div>

				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">DEPARTAMENTO</label>
										<select class="form-control" name="item_estado_reg" id="item_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Habilitado">PIURA</option>
											<option value="Deshabilitado">PAITA</option>
											<option value="Habilitado">SULLANA</option>
											<option value="Deshabilitado">TAMBO GRANDE</option>		
										</select>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<br>
					<fieldset>
						<legend><i class="fas fa-medal"></i> &nbsp; Datos Académicos</legend>
						<div class="container-fluid">
							<div class="row">
				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">TURNO</label>
										<select class="form-control" name="item_estado_reg" id="item_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Habilitado">MAÑANA</option>
											<option value="Deshabilitado">TARDE</option>
										</select>
									</div>
								</div>

								   <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="hora">HORA</label>
                                            <input type="time" class="form-control" name="hora" id="hora">
                                        </div>
                                    </div>

				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">DÍA</label>
										<select class="form-control" name="item_estado_reg" id="item_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Habilitado">LUNES</option>
											<option value="Deshabilitado">MARTES</option>
											<option value="Habilitado">MIÉRCOLES</option>
											<option value="Deshabilitado">JUEVES</option>
											<option value="Habilitado">VIERNES</option>		
										</select>
									</div>
								</div>

				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">GRADO</label>
										<select class="form-control" name="item_estado_reg" id="item_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Habilitado">PRIMERO</option>
											<option value="Deshabilitado">SEGUNDO</option>
											<option value="Habilitado">TERCERO</option>
											<option value="Deshabilitado">CUARTO</option>
											<option value="Habilitado">QUINTO</option>		
										</select>
									</div>
								</div>

				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">SECCIÓN</label>
										<select class="form-control" name="item_estado_reg" id="item_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Habilitado">"A"</option>
											<option value="Deshabilitado">"B"</option>
											<option value="Habilitado">"C"</option>
											<option value="Deshabilitado">"D"</option>
											<option value="Habilitado">"E"</option>		
											<option value="Deshabilitado">"F"</option>
											<option value="Habilitado">"G"</option>				
										</select>
									</div>
								</div>


				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating">ASIGNATURA</label>
										<select class="form-control" name="item_estado_reg" id="item_estado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="Habilitado">INGLÉS</option>	
											<option value="Habilitado">ARTE</option>
											<option value="Habilitado">COMUNICACIÓN</option>		
											<option value="Habilitado">C y T</option>				
											<option value="Deshabilitado">DPCC</option>
											<option value="Habilitado">EDUCACIÓN FÍSICA</option>
											<option value="Deshabilitado">EPT</option>
											<option value="Deshabilitado">MATEMÁTICA</option>
											<option value="Deshabilitado">RELIGIÓN</option>
											<option value="Habilitado">SOCIALES</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
					</p>

				<div class="alert alert-danger text-center" role="alert">
					<p><i class="fas fa-exclamation-triangle fa-5x"></i></p>
					<h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
					<p class="mb-0">Lo sentimos, no podemos mostrar la información solicitada debido a un error.</p>
				</div>

				</form>
			</div>
