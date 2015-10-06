
    <!-- Modal de CREAR CATEGORIA -->
		    <div class="modal fade" id="modal_nueva_categoria">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Creaci&oacute;n de una categoria</h4>
			      </div>
			        <form action="<?php echo base_url();?>administrador/reg_nueva_categoria" method="post">
					      <div class="modal-body">
					        <p>Nomre de la categoria a crear</p>
					        <input type="text" class="form-control" name="txtCategoria" id="txtCategoria">
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cerrar</button>
					        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar</button>
					      </div>
			        </form>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

    <!-- FIN de Modal de CREAR CATEGORIA -->