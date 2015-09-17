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
                                    	<div class="form-group input-group">
                                            <input type="text" class="form-control" placeholder="para buscar un proveedor cargado use este campo">
                                            <span class="input-group-btn">
                                                <button class="btn btn-info" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>

                                        <div class="form-group">
                                            <label>Razón Social</label>
                                            <input class="form-control">
                                            <p class="help-block">Describa el nombre del provedor</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Rif.</label>
                                            <input class="form-control" placeholder="ejemplo: J-12345678-9">
                                        </div>
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>

                                        <hr>
                                        <div class="form-group input-group">
                                        	<span class="input-group-addon">Bs.</span>
                                            <input class="form-control" placeholder="ejemplo: 3420.50">
                                            <span class="input-group-addon">MONTO</span>
                                        </div><br><hr><br>

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
                                        <button type="reset" class="btn btn-default">Limpiar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

	</div>
	<div class="col-lg-3">
        <?php $this->load->view('menu_opciones/opciones_fac_compras'); ?>
	</div>
</div>