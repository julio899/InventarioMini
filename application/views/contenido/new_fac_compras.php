<div class="row">
	<div class="col-lg-9">
        <div class="panel panel-green">
                        <div class="panel-heading">
                            Carga de una nueva factura de compra
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-lg-12">
                                    <form role="form">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                
                                                    <div class="form-group input-group">
                                                        <input type="text" class="form-control" id="buscador_proveedor" placeholder="para buscar un proveedor cargado use este campo">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-info" type="button"><i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div id="resultado" class="btn-group-vertical" role="group"></div>
                                            </div>
                                        </div>

                                        <div class="forn-group">
                                            <label id="status-busqueda"></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Razón Social</label>
                                            <input class="form-control" name="razon" id="razon">
                                            <p class="help-block">Describa el nombre del provedor</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Rif.</label>
                                            <input class="form-control" name="rif" id="rif" placeholder="ejemplo: J-12345678-9" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <textarea class="form-control" rows="3" name="direccion" id="direccion"></textarea>
                                        </div>

                                        <hr>
                                        <div class="form-group input-group">
                                        	<span class="input-group-addon">Bs.</span>
                                            <input class="form-control" placeholder="ejemplo: 3420.50">
                                            <span class="input-group-addon">MONTO</span>
                                        </div><hr>

                                        <div class="form-group">
                                            <label>Tipo de cuenta a la que se le asignara esta factura</label>
                                            <select name="tipo_cuenta" id="tipo_cuenta" class="form-control">
                                            	<option value="">Seleccione un Tipo de Cuenta --></option>
                                                 <?php   if (isset($cuentas)): 
                                                        for ($i=0; $i < count($cuentas); $i++) { 
                                                            echo '<option value="'.$cuentas[$i]['codigo'].'">[ '.$cuentas[$i]['codigo']." ] ". strtoupper($cuentas[$i]['nombre'] ).'</option>';
                                                        }
                                                    endif; ?>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label>Nro. de Factura</label>
                                            <input class="form-control" placeholder="ejemplo: 0012514">
                                        </div>

                                        <div class="form-group">
                                            <label>Descripción de esta factura</label>
                                            <input class="form-control" placeholder="ejemplo: Compra de Mercancia">
                                        </div>


                                        <div class="form-group">
                                        	<label for="datepicker">Fecha de la Factura</label>
                                        	<input id="datepicker" name="datepicker" type="date">	
                                        </div>
                                        <button type="submit" class="btn btn-primary">Cargar</button>
                                        <button type="reset" class="btn btn-default limpiar">Limpiar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
        <!--Cargamos el Js de Autocompletado -->
        <?php $this->load->view('js/buscador_proveedor'); ?>
	</div>
	<div class="col-lg-3">
        <?php $this->load->view('menu_opciones/opciones_fac_compras'); ?>
	</div>
</div>