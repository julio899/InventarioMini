
    <!-- Modal de CREAR UN TIPO DE CUENTA -->
		    <div class="modal fade" id="modal_nueva_cuenta">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Creaci&oacute;n de un tipo de Cuenta</h4>
			      </div>
			        <form action="<?php echo base_url().index_page();?>contador/reg_nueva_cuenta" method="post">
					      <div class="modal-body">
					        <p>Nomre de la cuenta a crear</p>
					        <input type="text" class="form-control" name="nombreCuenta" id="nombreCuenta" placeholder="Descripción" required>
					        <br><pre>Cree un codigo UNICO para esta cuenta <i class="fa fa-qrcode"></i> <i class="fa fa-barcode"></i>  <i class="glyphicon glyphicon-barcode"></i>  <i class="glyphicon glyphicon-qrcode"></i> </pre>
					        <input type="text" class="form-control" name="codigo" placeholder="Ejemplo: 1010" required>
					        <br><p>Naturaleza Contable de la cuenta, debita (-) por el</p>
					        				<select name="naturaleza" class="form-control" required>
                                                <option value="">Seleccione</option>
                                                <option value="D">Debe</option>
                                                <option value="H">Haber</option>
                                            </select>
                            <input type="hidden" name="usuario" value="<?php echo $this->session->userdata('datos_usuario')['usuario']; ?>">
					      </div>
					      <div class="modal-footer">
					      <?php //var_dump($this->session->userdata('datos_usuario')); ?>
					        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cerrar</button>
					        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar</button>
					      </div>
			        </form>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

    <!-- FIN de Modal de CREAR UN TIPO DE CUENTA -->