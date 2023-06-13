            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-center">
                    <i class="fas fa-sync-alt fa-fw"></i> &nbsp; <strong>ACTUALIZAR AMBIENTE</strong>
                </h3>
                <p class="text-justify">
                    Esta sección se aplica a la lista de ambientes y busqueda de ambientes y le permitirá modificar los datos que han sido registrados en relación a los ambientes con los que cuenta la Institución Educativa "San Miguel".
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
										<input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="item_codigo_up" id="item_codigo" maxlength="45">
									</div>
								</div>
								
								<div class="col-12 col-md-8">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">Nombre</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre_up" id="item_nombre" maxlength="140">
									</div>
								</div>

								<div class="col-12 col-md-12">
									<div class="form-group">
										<label for="item_detalle" class="bmd-label-floating">Descripción</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}" class="form-control" name="item_detalle_up" id="item_detalle" maxlength="190">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>

                <div class="alert alert-danger text-center" role="alert">
                    <p><i class="fas fa-exclamation-triangle fa-5x"></i></p>
                    <h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
                    <p class="mb-0">Lo sentimos, no podemos mostrar la información solicitada debido a un error.</p>
                </div>
                
			</div>