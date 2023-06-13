            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-center">
                    <i class="fas fa-plus fa-fw"></i> &nbsp; <strong>NUEVO HORARIO</strong>
                </h3>
                <p class="text-justify">
                    Este formulario se aplica al submenú "Horario" y le permitirá registrar un nuevo horario al que pueden acceder los docentes registrados en la base de datos y que para hacer uso de los ambientes AIP. 
                </p>
            </div>

            <div class="container-fluid">
                <div class="container-fluid form-neon">
                    <div class="container-fluid">
                        <p class="text-center roboto-medium">AGREGAR DOCENTE Y AMBIENTE</p>
                        <p class="text-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCliente"><i class="fas fa-user-plus"></i> &nbsp; Agregar Docente</button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalItem"><i class="fas fa-box-open"></i> &nbsp; Agregar Ambiente</button>
                        </p>
                        <div>
                            <span class="roboto-medium">ENCARGADO(A):</span> 
                            <span class="text-danger">&nbsp; <i class="fas fa-exclamation-triangle"></i> Seleccione un Encargado</span>
                            <form action="" style="display: inline-block !important;">
                                Amanda Peña Pintado
                                <button type="button" class="btn btn-danger"><i class="fas fa-user-times"></i></button>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr class="text-center roboto-medium">
                                        <th>AMBIENTE</th>
                                        <th>CANTIDAD DE HORAS</th>
                                        <th>TIEMPO</th>
                                        <th>DOCENTE</th>
                                        <th>ASIGNATURA</th>
                                        <th>DETALLE</th>
                                        <th>ELIMINAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" >
                                        <td>Ambiente AIP N° 01</td>
                                        <td>3 HORAS</td>
                                        <td>135 MINUTOS</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="MARITZA" data-content="COBEÑAS CHERO">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </td>
                                        <td>COMUNICACIÓN</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="PRIMERO" data-content="A">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
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
                                        <td>Ambiente AIP N° 01</td>
                                        <td>2 HORAS</td>
                                        <td>90 MINUTOS</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="HERMELINDA" data-content="FLORES SANCHES">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </td>
                                        <td>MATEMÁTICA</td>
                                        <td>
                                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="PRIMERO" data-content="B">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <form action="">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                    <tr class="text-center bg-light">
                                        <td><strong>TOTAL</strong></td>
                                        <td><strong>5 horas</strong></td>
                                        <td><strong>225 minutos</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form action="" autocomplete="off">
                        <fieldset>
                            <legend><i class="far fa-clock"></i> &nbsp; Fecha y hora de Solicitud</legend>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="prestamo_fecha_inicio">Fecha de solicitudo</label>
                                            <input type="date" class="form-control" name="prestamo_fecha_inicio_reg" id="prestamo_fecha_inicio">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="prestamo_hora_inicio">Hora de solicitud</label>
                                            <input type="time" class="form-control" name="prestamo_hora_inicio_reg" id="prestamo_hora_inicio">
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
                                            <input type="date" class="form-control" name="prestamo_fecha_final_reg" id="prestamo_fecha_final">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="prestamo_hora_final">Hora de entrada</label>
                                            <input type="time" class="form-control" name="prestamo_hora_final_reg" id="prestamo_hora_final">
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
                            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                            &nbsp; &nbsp;
                            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                        </p>
                    </form>
                </div>
            </div>


            <!-- MODAL CLIENTE -->
            <div class="modal fade" id="ModalCliente" tabindex="-1" role="dialog" aria-labelledby="ModalCliente" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalCliente">Agregar Docente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="input_cliente" class="bmd-label-floating">DNI, Nombre, Apellido</label>
                                    <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" name="input_cliente" id="input_cliente" maxlength="30">
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid" id="tabla_clientes">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-sm">
                                        <tbody>
                                            <tr class="text-center">
                                                <td>02852062 - MARITZA - COBEÑAS CHERO</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>03358861 - HERMELINDA - FLORES SANCHES</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary"><i class="fas fa-user-plus"></i></button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <p class="text-center mb-0">
                                    <i class="fas fa-exclamation-triangle fa-2x"></i><br>
                                    No hemos encontrado ningún docente en el sistema que coincida con <strong>“Busqueda”</strong>
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar</button>
                            &nbsp; &nbsp;
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- MODAL ITEM -->
            <div class="modal fade" id="ModalItem" tabindex="-1" role="dialog" aria-labelledby="ModalItem" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalItem">Agregar Ambiente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="form-group">
                                    <label for="input_item" class="bmd-label-floating">Código, Nombre</label>
                                    <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" name="input_item" id="input_item" maxlength="30">
                                </div>
                            </div>
                            <br>
                            <div class="container-fluid" id="tabla_items">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-sm">
                                        <tbody>
                                            <tr class="text-center">
                                                <td>AIP001 - Ambiente AIP N° 01</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>AIP002 - Ambiente AIP N° 02</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>AIP003 - Ambiente AIP N° 03</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary"><i class="fas fa-box-open"></i></button>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="alert alert-warning" role="alert">
                                <p class="text-center mb-0">
                                    <i class="fas fa-exclamation-triangle fa-2x"></i><br>
                                    No hemos encontrado ningún ambiente en el sistema que coincida con <strong>“Busqueda”</strong>
                                </p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar</button>
                            &nbsp; &nbsp;
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- MODAL AGREGAR ITEM -->
            <div class="modal fade" id="ModalAgregarItem" tabindex="-1" role="dialog" aria-labelledby="ModalAgregarItem" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form class="modal-content FormularioAjax">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalAgregarItem">Selecciona el formato, cantidad de ambientes, tiempo y costo del préstamo del item</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id_agregar_item" id="id_agregar_item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="detalle_formato" class="bmd-label-floating">Formato de préstamo</label>
                                            <select class="form-control" name="detalle_formato" id="detalle_formato">
                                                <option value="Horas" selected="" >Horas</option>
                                                <option value="Dias">Días</option>
                                                <option value="Evento">Evento</option>
                                                <option value="Mes">Mes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="detalle_cantidad" class="bmd-label-floating">Cantidad de ambientes</label>
                                            <input type="num" pattern="[0-9]{1,7}" class="form-control" name="detalle_cantidad" id="detalle_cantidad" maxlength="7" required="" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="detalle_tiempo" class="bmd-label-floating">Tiempo (según formato)</label>
                                            <input type="num" pattern="[0-9]{1,7}" class="form-control" name="detalle_tiempo" id="detalle_tiempo" maxlength="7" required="" >
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="detalle_costo_tiempo" class="bmd-label-floating">Costo por unidad de tiempo</label>
                                            <input type="text" pattern="[0-9.]{1,15}" class="form-control" name="detalle_costo_tiempo" id="detalle_costo_tiempo" maxlength="15" required="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" >Agregar</button>
                            &nbsp; &nbsp;
                            <button type="button" class="btn btn-secondary" >Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
