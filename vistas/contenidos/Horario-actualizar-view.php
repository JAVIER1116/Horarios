            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-center">
                    <i class="fas fa-sync-alt fa-fw"></i> &nbsp; <strong>ACTUALIZAR HORARIO</strong>
                </h3>
                <p class="text-justify">
                    Esta sección se aplica a la sección horarios: reservaciones, pendientes, finalizados y busqueda; y le permitirá modificar los datos que han sido registrados en relación a los horarios de acceso a los ambientes AIP.
                </p>
            </div>

            <div class="container-fluid">

                    <div class="container-fluid">
                        <div>
                            <span class="roboto-medium">DOCENTE:</span> 
                            &nbsp; MARITZA
                        </div>
                        <div class="table-responsive">
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr class="text-center roboto-medium">
                                        <th>AMBIENTE</th>
                                        <th>CANTIDAD</th>
                                        <th>TIEMPO</th>
                                        <th>ASIGNATURA</th>
                                        <th>DETALLE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" >
                                        <td>Ambiente AIP N° 01</td>
                                        <td>3 HORAS</td>
                                        <td>135 MINUTOS</td>
                                        <td>COMUNICACIÓN</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="PRIMERO" data-content="A">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr class="text-center" >
                                        <td>Ambiente AIP N° 01</td>
                                        <td>2 HORAS</td>
                                        <td>90 MINUTOS</td>
                                        <td>MATEMÁTICA</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="PRIMERO" data-content="B">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form action="" autocomplete="off">
                        <fieldset>
                            <legend><i class="far fa-clock"></i> &nbsp; Fecha y hora de solicitud</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="prestamo_fecha_inicio">Fecha de solicitud</label>
                                            <input type="date" class="form-control" readonly="" id="prestamo_fecha_inicio">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="prestamo_hora_inicio">Hora de solicitud</label>
                                            <input type="text" class="form-control" readonly="" id="prestamo_hora_inicio">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend><i class="fas fa-history"></i> &nbsp; Fecha y hora de entrada</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="prestamo_fecha_final">Fecha de entrada</label>
                                            <input type="date" class="form-control" readonly="" id="prestamo_fecha_final">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="prestamo_hora_final">Hora de entrada</label>
                                            <input type="text" class="form-control" readonly="" id="prestamo_hora_final">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend><i class="fas fa-cubes"></i> &nbsp; Otros datos</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-2">
                                        <div class="form-group">
                                            <label for="prestamo_estado" class="bmd-label-floating">Estado</label>
                                            <select class="form-control" name="prestamo_estado_reg" id="prestamo_estado">
                                                <option value="" selected="" disabled="">Seleccione una opción</option>
                                                <option value="Reservacion">Reservación</option>
                                                <option value="Prestamo">Pendientes</option>
                                                <option value="Finalizado">Finalizado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-10">
                                        <div class="form-group">
                                            <label for="prestamo_observacion" class="bmd-label-floating">Observación</label>
                                            <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,400}" class="form-control" name="prestamo_observacion_reg" id="prestamo_observacion" maxlength="400">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <p class="text-center" style="margin-top: 40px;">
                            <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
                        </p>
                    </form>
                </div>



                <div class="alert alert-danger text-center" role="alert">
                    <p><i class="fas fa-exclamation-triangle fa-5x"></i></p>
                    <h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
                    <p class="mb-0">Lo sentimos, no podemos mostrar la información solicitada debido a un error.</p>
                </div>
    
            </div>
