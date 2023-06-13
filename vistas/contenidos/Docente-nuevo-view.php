					<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-center">
					<i class="fas fa-plus fa-fw"></i> &nbsp; <strong>AGREGAR DOCENTE</strong>
				</h3>
				<p class="text-justify">
					Este formulario se aplica al submenú "Docentes" y le permitirá registrar un nuevo docente, ya que previamente se ha considerado una lista de docentes otorgado por la institución para la ejecución del proyecto; pero existe la posibilidad de en un futuro necesitar la incorporación de un nuevo docente por lo que esta opción facilitaría dicha labor.
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
										<label for="docente_nombre" class="bmd-label-floating">NOMBRES</label>
										<input type="text" pattern="[0-9-]{1,27}" class="form-control" name="docente_nombre_reg" id="docente_nombre" maxlength="27"required="">
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="docente_apellido" class="bmd-label-floating">APELLIDOS</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="docente_apellido_reg" id="docente_apellido" maxlength="40"required="">
									</div>
								</div>

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="docente_email" class="bmd-label-floating">EMAIL</label>
										<input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="docente_email_reg" id="docente_email" maxlength="40"required="">
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
										<label for="docente_periodo" class="bmd-label-floating">PERIODO</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="docente_periodo_reg" id="docente_periodo" maxlength="150"required="">
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
										<label for="docente_dni" class="bmd-label-floating">DNI</label>
										<input type="text" pattern="[0-9-]{1,27}" class="form-control" name="docente_dni_reg" id="docente_dni" maxlength="27"required="">
									</div>
								</div>

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="docente_telefono" class="bmd-label-floating">TELÉFONO/CELULAR</label>
										<input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="docente_telefono_reg" id="docente_telefono" maxlength="20"required="">
									</div>
								</div>



								<div class="col-12 col-md-8">
									<div class="form-group">
										<label for="docente_direccion" class="bmd-label-floating">DIRECCIÓN</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,150}" class="form-control" name="docente_direccion_reg" id="docente_direccion" maxlength="150"required="">
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
										<label for="item_turno" class="bmd-label-floating">TURNO</label>
										<select class="form-control" name="item_turno_reg" id="item_turno">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="MAÑANA">MAÑANA</option>
											<option value="TARDE">TARDE</option>
										</select>
									</div>
								</div>

								   <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="hora">HORA</label>
                                            <input type="time" class="form-control" name="hora" id="hora" required="">
                                        </div>
                                    </div>

				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_dia" class="bmd-label-floating">DÍA</label>
										<select class="form-control" name="item_dia_reg" id="item_dia">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="LUNES">LUNES</option>
											<option value="MARTES">MARTES</option>
											<option value="MIÉRCOLES">MIÉRCOLES</option>
											<option value="JUEVES">JUEVES</option>
											<option value="VIERNES">VIERNES</option>		
										</select>
									</div>
								</div>

				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_grado" class="bmd-label-floating">GRADO</label>
										<select class="form-control" name="item_grado_reg" id="item_grado">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="PRIMERO">PRIMERO</option>
											<option value="SEGUNDO">SEGUNDO</option>
											<option value="TERCERO">TERCERO</option>
											<option value="CUARTO">CUARTO</option>
											<option value="QUINTO">QUINTO</option>		
										</select>
									</div>
								</div>

				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_seccion" class="bmd-label-floating">SECCIÓN</label>
										<select class="form-control" name="item_seccion_reg" id="item_seccion">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="A">"A"</option>
											<option value="B">"B"</option>
											<option value="C">"C"</option>
											<option value="D">"D"</option>
											<option value="E">"E"</option>		
											<option value="F">"F"</option>
											<option value="G">"G"</option>				
										</select>
									</div>
								</div>


				                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_asignatura" class="bmd-label-floating">ASIGNATURA</label>
										<select class="form-control" name="item_asignatura_reg" id="item_asignatura">
											<option value="" selected="" disabled="">Seleccione una opción</option>
											<option value="INGLÉS">INGLÉS</option>	
											<option value="ARTE">ARTE</option>
											<option value="COMUNICACIÓN">COMUNICACIÓN</option>		
											<option value="C y T">C y T</option>				
											<option value="DPCC">DPCC</option>
											<option value="EDUCACIÓN FÍSICA">EDUCACIÓN FÍSICA</option>
											<option value="EPT">EPT</option>
											<option value="MATEMÁTICA">MATEMÁTICA</option>
											<option value="RELIGIÓN">RELIGIÓN</option>
											<option value="SOCIALES">SOCIALES</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<p class="text-center" style="margin-top: 40px;">
						<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
						&nbsp; &nbsp;
						<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
					</p>
				</form>
			</div>

