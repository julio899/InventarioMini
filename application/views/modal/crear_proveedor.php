
<!-- * * * * * * MODAL DE NUEVO PROVEEDOR * * * * * * * * -->
			<div id="modal_nuevo_proveedor" class="modal fade">
				
			  <div class="modal-dialog">
			    <div class="modal-content bs-callout bs-callout-info">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Registro de Nuevo Proveedor</h4>
			      </div>
			        <form id="form_nuevo_proveedor" action="<?php echo base_url().index_page();?>/administrador/reg_nuevo_proveedor" method="post" class="form-horizontal">
					      <div class="modal-body">
					      
								    <!-- nombre del proveedor -->
									<div class="control-group">
									  <label class="control-label" for="proveedor"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Nomre del Proveedor</label>
									  <div class="controls">
									    <input id="proveedor" name="proveedor" type="text" data-toggle="tooltip" data-placement="left" title="Titulo o razon social del Proveedor" class="form-control">
									    <p class="help-block">Razon Social del Proveedor.</p>
									  </div>
									</div>

								    <!-- codigo del Proveedor -->
									<div class="control-group">
									  <label class="control-label" for="codigo"><span class="glyphicon glyphicon-qrcode	" aria-hidden="true"></span> CODIGO</label>
									  <div class="controls">
									    <input id="proveedor_codigo" name="codigo" type="text" data-toggle="tooltip" data-placement="left" title="debe crear un codigo unico para este proveedor" autocomplete="off" class="form-control">
									    <p class="help-block proveedor_help">cree un codigo unico para el proveedor.</p>
									  </div>
									</div>

								    <!-- RIF -->
									<div class="control-group">
									  <label class="control-label" for="rif"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> RIF. o CI </label>
									  <div class="controls">
									    <input id="rif" name="rif" type="text" data-toggle="tooltip" data-placement="left" title="Rif completo ejemplo J-12345678-9" class="form-control">
									    <p class="help-block">indicar un Rif o Cedula para el proveedor</p>
									  </div>
									</div>

									<div class="control-group">
							        <label class="control-label" for="direccion">Dieccion: </label>
							        <div class="input-group">
							          <textarea name="direccion" id="direccion" placeholder="Describa la direccion aqui en este espacio." cols="62" rows="5"></textarea>
							        </div>
							      </div>

									<div class="control-group">
							        <label class="control-label" for="telefono">Telefono</label>
							        <div class="input-group">
							          <div class="input-group-addon alert-success">#</div>
							          <input type="text"  step="0.01"  class="form-control" name="telefono" id="telefono" placeholder="0243-2713140" data-toggle="tooltip" data-placement="top" title="Numero telefonico. ejemplo 0426-1234567" >
							        </div>
							      </div>


					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cerrar</button>
					        <button type="submit" id="btn_guardar_proveedor" class="btn btn-success" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Guardar</button>
					      </div>
			        </form>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>
<!-- * * * FIN DE MODAL DE NUEVO PROVEEDOR * * * * * * * * -->
