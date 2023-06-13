            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-center">
                    <i class="fas fa-plus fa-fw"></i> &nbsp; <strong>AGREGAR AMBIENTE</strong>
                </h3>
                <p class="text-justify">
                    Este formulario se aplica al submenú "Ambientes" y le permitirá registrar un nuevo ambiente, ya que previamente se han considerado solo dos ambientes; pero existe la posibilidad de en un futuro necesitar la incorporación de un nuevo ambiente por lo que esta opción facilitaría dicha labor.
                </p>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información del Ambiente</legend>
						<div class="container-fluid">
							<div class="row">

								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_codigo" class="bmd-label-floating">Código</label>
										<input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="item_codigo_reg" id="item_codigo" maxlength="45" required="">
									</div>
								</div>
								
								<div class="col-12 col-md-8">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre_reg" id="item_nombre" maxlength="140" required="">
									</div>
								</div>
								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="item_detalle" class="bmd-label-floating">Descripción</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}" class="form-control" name="item_detalle_reg" id="item_detalle" maxlength="190" required="">
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