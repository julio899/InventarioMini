
    <!-- Modal de CONSULTAR MES ESPECIFICO -->
		    <div class="modal fade" id="modal_consultar_mes">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">CONSULTAR MES ESPECIFICO</h4>
			      </div>
			        <form action="<?php echo base_url();?>contador" method="post">
					      <div class="modal-body">					      
							<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="number" min="2000" max="2030" class="form-control" name="year" placeholder="Año <?php echo date('Y'); ?>" required>
                           	</div>

                           	<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="number" min="01" max="12" class="form-control" name="mes" placeholder="Mes <?php echo date('m'); ?>" required>
                           	</div>
					      </div>
					      <div class="modal-footer">
					      	<button type="submit" class="btn btn-success btn-circle btn-xl"><i class="fa fa-check"></i></button>
					      </div>
			        </form>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

    <!-- FIN de Modal de CONSULTAR MES ESPECIFICO -->